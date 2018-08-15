<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'body'
    ];

    public function posts(){
        //return $this->hasMany(Post::class);
        return $this->belongsToMany(Post::class);
    }


    public function show(){
        return $this->belongsToMany(Category::class);
    }
}
