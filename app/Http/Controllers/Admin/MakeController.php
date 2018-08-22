<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Make;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makes = Make::all();
        return view('admin.makes.index', compact('makes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.makes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Make::create($request->all());

        return redirect()->route('make.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function show(Make $make)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function edit(Make $make)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Make $make)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function destroy(Make $make)
    {
        //
    }
}