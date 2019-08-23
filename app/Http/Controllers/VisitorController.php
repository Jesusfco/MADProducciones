<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;

class VisitorController extends Controller
{

    public function index(){
        $article = Article::latest()->first();
        return view('visitor/index')->with('article', $article);
    }

    public function login(){
        if(Auth::check()) return redirect('/app');            
        else return view('visitor/login');
    }

    public function blog(Request $re) {
        $articles = Article::search($re->term)->orderBy('date', 'DESC')
                            ->with(['user', 'type'])->paginate(9);
        return view('visitor/articles')->with('articles', $articles);
    }

    public function article($id) {
        $article = Article::find($id);
        return view('visitor/article')->with('article', $article);
    }
}
