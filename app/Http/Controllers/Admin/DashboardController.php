<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); 
    }

    public function index(){
        return view('app/dashboard');
    }
    

}
