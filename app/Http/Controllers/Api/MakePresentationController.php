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
            ->select(['presentation', 'id'])
            ->where('make_id', $make)
            ->where('state', 1)
            ->get();

        return response()->json($presents);
    }
}
