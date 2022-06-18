<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function post(){
        return view('post');
    }

    public function profile(){
        return view('profile');
    }
}


