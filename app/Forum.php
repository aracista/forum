<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
     protected $fillable = [
        'title', 'post',
    ];

    public function tag()
    {
    	return $this->belongsToMany('App\Tag');
    }

}
