<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'name',
        'presentation',
        'make_id',
        'code',
        'discount',
        'code1',
        'code2',
        'code3',
        'from_date',
        'to_date',
        'state',
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($discount) {
            $discount->from_date = (new Carbon($discount->from_date))->format('Y/m/d');
            $discount->to_date = (new Carbon($discount->to_date))->format('Y/m/d');
            $discount->state = ($discount->state === 'on')? true:false;
        });

        self::updating(function ($discount) {
            $discount->from_date = (new Carbon($discount->from_date))->format('Y/m/d');
            $discount->to_date = (new Carbon($discount->to_date))->format('Y/m/d');
            $discount->state = ($discount->state === 'on')? true:false;
        });


    }

    public function make()
    {
        return $this->belongsTo(Make::class);
    }
}
