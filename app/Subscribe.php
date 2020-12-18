<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable = [
        'email',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'subscribes_categories', 'subscribe_id');
    }
}
