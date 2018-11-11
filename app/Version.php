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


    /**
     * Give the version witch has this name, or the latest
     *
     * @param string the name of the version
     */
    public static function getNamedOrLatest($name = null) 
    {
        if($name == null)
        {
            $version = static::orderBy('created_at')->first();
        }
        else 
        {
            $version = static::where('name', $name)->first();
        }

        return $version;
    }
}
