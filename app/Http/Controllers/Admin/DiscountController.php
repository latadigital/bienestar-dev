<?php

namespace App\Http\Controllers\Admin;

use App\Discount;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDiscountRequest;
use App\Make;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::all();

        return view('admin.discounts.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makes = Make::all();

        return view('admin.discounts.create', compact('makes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateDiscountRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiscountRequest $request)
    {
        $code1 = $request->file('code1')->storePublicly('public/discount');
        $code2 = $request->file('code2')->storePublicly('public/discount');
        $code3 = $request->file('code3')->storePublicly('public/discount');

        $request['code1'] = $code1;
        $request['code2'] = $code2;
        $request['code3'] = $code3;

        Discount::create($request->all());

        return redirect()->route('discount.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        //
    }
}
