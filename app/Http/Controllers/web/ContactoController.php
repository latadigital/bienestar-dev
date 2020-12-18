<?php

namespace App\Http\Controllers\web;

use App\Contacto;
use App\Http\Requests\ContactoCreateRequest;

use App\Http\Controllers\Controller;

class ContactoController extends Controller
{

    public function index()
    {
        return view('web.contacto');
    }

    public function store(ContactoCreateRequest $request)
    {
        Contacto::create($request->all());

        return redirect()->back()->with('mensaje', 'Tu mensaje fue guardado, gracias por escribirnos');
    }


}
