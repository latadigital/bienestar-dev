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

        $Posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);
        
        return view('web.blog', compact('Posts'));

    }

    public function category($slug){
        //$category = Category::where('slug', $slug)->pluck('id')->first();
        //$Posts    = Post::where('category_id', $category)->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);
        //return view('web.blog', compact('Posts'));
    }
    
    public function tag($slug){
        $Posts = Post::whereHas('tags', function($query) use ($slug){

            $query->where('slug', $slug);

        })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);

        return view('web.blog', compact('Posts'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }



}
