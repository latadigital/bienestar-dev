<?php

namespace App\Http\Controllers\Api;

use App\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakeDiscountController extends Controller
{
    public function show($make, $presentation)
    {
        $presents = Discount::query()
            ->where('make_id', $make)
            ->where('id', $presentation)
            ->where('state', 1)
            ->with('make')
            ->firstOrFail();

        return response()->json($presents);
    }
}
