<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;
use Mail;
use App\Mail\ContactMail;

class VisitorController extends Controller
{

    public function index(){
        $article = Article::latest()->first();
        return view('visitor/index')->with('article', $article);
    }
    public function works(Request $re){
        $articles = Article::search($re->term)->orderBy('date', 'DESC')
                            ->with(['user', 'type'])->paginate(9);
        return view('visitor/works')->with('articles', $articles);
    }

    public function login(){
        if(Auth::check()) return redirect('/app');            
        else return view('visitor/login');
    }    

    public function article($id) {
        $article = Article::find($id);
        return view('visitor/article')->with('article', $article);
    }

    public function sendMail(Request $re) {
        $data = (object) NULL;
        $data->email = $re->email;
        $data->name = $re->name;
        $data->message = $re->message;
        $data->phone = $re->phone;
                       
        Mail::send(new ContactMail($data));
                
        return response()->json(['msj' => 'Mensaje enviado, en breve se le contestara']);
    }
}
