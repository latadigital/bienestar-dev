<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


use App\Post;
use App\Tag;
use App\Category;


class BlogController extends Controller
{

    function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED');
        if (\request()->has('q')) {
            $posts->where('name', 'like', '%'.\request()->get('q').'%');
        }
        $posts = $posts->get();
        return view('web.temasInteres', compact('posts', 'categories'));
    }

    public function category($slug)
    {
        $category = Category::query()
            ->with(['posts' => function ($query) {
                $query->isPublished()
                    ->orderByDesc('id')
                    ->take(15);
            }])->where('slug', $slug)
            ->firstOrFail();

        return view('web.blog', compact('category'));
    }
    
    public function tag($slug){
        $posts = Post::whereHas('tags', function($query) use ($slug){
            $query->where('slug', $slug);
        })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);

        return view('web.blog', compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();
        $category = DB::table('categories')->get();

        return view('web.post', compact('post'), ['categories' => $category]);
    }

}
