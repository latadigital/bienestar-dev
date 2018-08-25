<?php

namespace App\Http\Controllers\Web;

use App\Make;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramaDescuentosController extends Controller
{
    function __construct(){

    }

    function index()
    {
        $makes = Make::all();

        return view('web.programa-descuentos', compact('makes'));
    }
}
