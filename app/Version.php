<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'url'];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
