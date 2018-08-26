<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SomosController extends Controller
{
    function __construct(){

    }

    function index(){
        return view('web.somos');
    }
}
