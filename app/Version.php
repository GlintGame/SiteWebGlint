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
    protected $fillable = ['version_name', 'url_win', 'url_mac', 'url_lin'];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
