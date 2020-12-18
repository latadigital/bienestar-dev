<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'name', 'slug',
        'excerpt', 'body', 'status',
        'file', 'primary'
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($post){
            $post->status = ($post->status === 'on')? true:false;
            $post->primary = ($post->primary === 'on')? true:false;
            if (Auth::guest()) {
                $post->user_id = 1;
            } else {
                $post->user_id = Auth::user()->getAuthIdentifier();
            }
        });

        self::updating(function ($post){
            $post->status = ($post->status === 'on')? true:false;
            $post->primary = ($post->primary === 'on')? true:false;

            if (Auth::guest()) {
                $post->user_id = 1;
            } else {
                $post->user_id = Auth::user()->getAuthIdentifier();
            }
        });
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Scope para buscar los Published
     */
    public function scopeIsPublished()
    {
        $this->where('status', 'PUBLISHED');
    }
}
