<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleType;
use App\ArticlePhoto;
use Auth;
use Image;
use File;


class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); 
    }

    public function list(Request $re) {

        $objects = Article::search($re->term)
            ->orderBy('id','desc')
            ->with(['user', 'type'])
            ->paginate(15);
        return view('app/articles/list')->with('objects', $objects);
    }

    public function create(){
        $types = ArticleType::all();
        return view('app/articles/create')->with('types', $types);
    }

    public function store(Request $re) {

        $obj = new Article();        
        $this->pushData($re, $obj);

        return redirect('app/articles')->with('msj', 'Se ha creado un nuevo articulo con exito');
    }

    public function edit($id) {
        $obj = Article::find($id);
        $types = ArticleType::all();
        return view('app/articles/edit')->with(['obj' => $obj, 'types' => $types]);
    }

    public function update(Request $re, $id) {

        $obj = Article::find($id);
        $this->pushData($re, $obj);
        return back()->with('msj', 'Se ha actualizado el articulo con exito');

    }

    public function delete($id) {
        
        $n = Article::find($id);        
        File::deleteDirectory('img/articles/' . $n->id);
        $n->delete();
        return 'true';
    }

    private function pushData(Request $re, Article $obj) {

        $obj->user_id = Auth::id();
        $obj->article_type_id = $re->article_type_id;
        $obj->name = $re->name;
        $obj->resume = $re->resume;
        $obj->date = $re->date;
        $obj->text = $re->text;
        $obj->youtube = $re->youtube;

        $new = false;
        if($obj->id == NULL) $new = true;

        if($re->img) {            
            $img = $re->file('img');
            $file_route = time().'_principal.'. $img->getClientOriginalExtension();
            $obj->img = $file_route;
        }

        $obj->save();

        if($new) {
            File::makeDirectory('img/articles/' . $obj->id);
        };

        if($re->img) {
            ini_set('memory_limit','256M');
            Image::make($re->file('img'))
            ->fit(900,600)
            ->save("img/articles/" . $obj->id . '/' . $file_route);
        }                
        
    }

    public function uploadPhotos($id) {
        $obj = Article::find($id);        
        return view('app/articles/uploadPhotos')->with(['obj' => $obj]);
    }

    public function getPhotos($id) {
        return response()->json(ArticlePhoto::where('article_id', $id)->get());
    }

    public function storePhoto(Request $request, $id) {
        
        $this->validate($request, [
            'image' => 'required|image'
        ]);

        $img = $request->file('image');                        

        ini_set('memory_limit', '420M');
        $file_route = $img->getClientOriginalName();
        $file_route = str_replace(' ', '_', $file_route);

        $image = Image::make($img);

        if ($image->width() >= $image->height() && $image->width() > 960) {            

            $image->resize(960, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

        } else  if ($image->width() < $image->height() && $image->height() > 960) {

            $image->resize(null, 960, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

        } 
        
        $image->save('img/articles/' . $id .'/' . $file_route);       

        $photo = new ArticlePhoto();
        $photo->article_id = $id;
        $photo->name = $file_route;        
        $photo->save();

        return response()->json($photo);

    }

    public function deletePhoto(Request $request, $id) {
        ArticlePhoto::find($request->id)->delete();
        File::delete('img/articles/' . $id . '/' . $request->name);
        return response()->json(true);
    }

}
