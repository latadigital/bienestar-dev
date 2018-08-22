<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    protected $fillable = [
        'name'
    ];

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }
}
