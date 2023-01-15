<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('index', ["title"=>"Home"]);
    }

    public function about(){
        return view('about', ["title"=>"About Us"]);
    }

    public function users(User $user){
        return view('about', ["title"=>"Users"]);
    }

    public function show(Post $post){
        return view('post');
    }
}
