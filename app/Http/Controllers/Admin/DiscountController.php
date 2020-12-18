<?php

namespace App\Http\Controllers\Admin;

use App\Discount;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;
use App\Make;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Sodium\compare;

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
        $code1 = explode('/', $request->file('file1')->store('public/discount'));
        $code2 = explode('/', $request->file('file2')->store('public/discount'));
        $code3 = explode('/', $request->file('file3')->store('public/discount'));

        $request['code1'] = "/storage/discount/{$code1[2]}";
        $request['code2'] = "/storage/discount/{$code2[2]}";
        $request['code3'] = "/storage/discount/{$code3[2]}";

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
        $discount->make;

        return view('admin.discounts.show', compact('discount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        $makes = Make::all();

        return view('admin.discounts.update', compact('discount', 'makes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDiscountRequest $request
     * @param  \App\Discount $discount
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        if ($request->hasFile(['file1']) && $request->hasFile(['file2']) &&
            $request->hasFile(['file3'])) {
            Storage::delete([$discount->code1, $discount->code2, $discount->code3]);

            $code1 = explode('/', $request->file('file1')->store('public/discount'));
            $code2 = explode('/', $request->file('file2')->store('public/discount'));
            $code3 = explode('/', $request->file('file3')->store('public/discount'));

            $request['code1'] = "/storage/discount/{$code1[2]}";
            $request['code2'] = "/storage/discount/{$code2[2]}";
            $request['code3'] = "/storage/discount/{$code3[2]}";
        }

        $discount->update($request->all());

        return redirect()->route('discount.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount $discount
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();

        return redirect()->route('discount.index');
    }
}
