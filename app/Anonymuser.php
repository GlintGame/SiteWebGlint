<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anonymuser extends Model
{
    protected $fillable = ['ip','last_post'];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
