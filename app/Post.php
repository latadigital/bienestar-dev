<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'user_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
