<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'version_id', 'user_id', 'anonymuser_id', 'given_name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function anonymuser()
    {
        return $this->belongsTo('App\Anonymuser');
    }

    public function version()
    {
        return $this->belongsTo('App\Version');
    }

}
