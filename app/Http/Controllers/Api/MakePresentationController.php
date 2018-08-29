<?php

namespace App\Http\Controllers\Api;

use App\Discount;
use App\Make;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakePresentationController extends Controller
{
    public function index($make)
    {
        $presents = Discount::query()
            ->where('make_id', $make)
            ->where('state', 1)
            ->with('make')
            ->get();

        return response()->json($presents);
    }
}
