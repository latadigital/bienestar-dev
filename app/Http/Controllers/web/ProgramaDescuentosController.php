<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramaDescuentosController extends Controller
{
    function __construct(){

    }

    function index(){
        return view('web.programa-descuentos');
    }
}
