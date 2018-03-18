<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }




    protected $fillable = ['title', 'body'];
    //protected $guarded = ['user_id'];
}
