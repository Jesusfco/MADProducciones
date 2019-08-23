<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleType;
use Image;
use Storage;
use File;

class ArticleTypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); 
    }

    public function list(Request $re) {

        $objects = ArticleType::search($re->term)
            ->orderBy('name','asc')            
            ->paginate(15);
        return view('app/articles/types/list')->with('objects', $objects);
    }

    public function create(){        
        return view('app/articles/types/create');
    }

    public function store(Request $re) {

        $obj = new ArticleType();
        $this->pushData($re, $obj);

        return redirect('app/articles/types')->with('msj', 'Se ha creado un tipo de articulo con exito');
    }

    public function edit($id) {
        $obj = ArticleType::find($id);
        return view('app/articles/types/edit')->with('obj', $obj);
    }

    public function update(Request $re, $id) {

        $obj = ArticleType::find($id);
        $this->pushData($re, $obj);
        return back()->with('msj', 'Se ha actualizado el tipo de articulo con exito');

    }

    public function delete($id) {
        
        $n = ArticleType::find($id);    
        if($n->img != NULL)  
            File::delete("img/articles/$n->img");
        $n->delete();
        return 'true';
    }

    private function pushData(Request $re, ArticleType $obj) {
        
        $obj->name = $re->name;
        $obj->description = $re->description;                        
        $obj->save();
        

        if($re->img) {
            // ini_set('memory_limit','256M');
            $img = $re->file('img');
            $obj->img = "$obj->id." . $img->getClientOriginalExtension();
            Image::make($re->file('img'))
            ->fit(900,600)
            ->save("img/articles/$obj->img");

            $obj->save();
           
        }                
        
    }
}
