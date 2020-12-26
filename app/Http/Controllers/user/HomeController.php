<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
           $posts = Post::all();

        return view('users.pages.home',compact('posts'));
//         return view('users.pages.home');
    }
}
