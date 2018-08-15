<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
     function __construct(){

    }

    function index(){
        return view('web.faqs');
    }
}
