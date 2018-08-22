<?php

namespace App;

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

    public function make()
    {
        return $this->belongsTo(Make::class);
    }
}
