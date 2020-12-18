<?php

namespace App\Http\Controllers\Api;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $count)
    {
        request()['page'] = $count;

        $posts = Post::query()
            ->select(['posts.*'])
            ->join('category_post', 'category_post.post_id', '=', 'posts.id')
            ->where('category_id', '=', $id)
            ->isPublished()
            ->orderByDesc('id')
            ->paginate();

        return response()->json($posts);
    }
}
