<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Post;


class BlogController extends Controller
{
    function __construct(){

    }

    function index(){

        $Posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);
        
        return view('web.blog', compact('Posts'));

    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();

        return view('web.post', compact('post'));
    }
}
