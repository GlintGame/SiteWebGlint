<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller
{

    // give a specific version of the game
    public function version(string $version)
    {
        if(isset($version))
        {
            return view('welcome');
        }
        return view('error', ['message' => 'Work In Progress']);
    }

    public function addPost(Request $request)
    {

        $content = $request->input('content');

        if(Auth::check())
        {
            
        }
        else
        {
            $user = Anonymuser::where('ip', $request->ip());
            if($user == null)
            {
                $user = Anonymuser::create(['ip' => $request->ip(), 'last_post' => Carbon::now()->timestamp]);
            } else {
                $last_post = new Carbon($user->last_post);
                if($last_post->diffInMinutes(Carbon::now()) < 5) {
                    // user cant post right now
                } else {
                    $user->last_post = Carbon::now()->timestamp;
                    $user->save();
                }
            }
            
            
            // here user can post 

        }
    }
}
