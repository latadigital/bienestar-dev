<?php

namespace App\Http\Controllers\Api;

use App\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'categories.*' => 'required',
            'email' => 'required|email'
        ]);

        $subs = new Subscribe();
        $subs->email = $request->get('email');
        $subs->save();

        $subs->categories()->attach($request->get('categories'));
    }
}
