<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Post;
use App\Tag;
use App\Category;


class BlogController extends Controller
{
    function __construct(){

    }

    function index(){
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);
        
        return view('web.blog', compact('posts'));

    }

    public function category($slug){
        $posts = Post::whereHas('categories', function($query) use ($slug){
            $query->where('slug', $slug);
        })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);

        return view('web.blog', compact('posts'));
    }
    
    public function tag($slug){
        $posts = Post::whereHas('tags', function($query) use ($slug){
            $query->where('slug', $slug);
        })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);

        return view('web.blog', compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }



}
