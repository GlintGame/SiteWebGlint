<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Version;

class HomeController extends Controller
{

    // give a specific version of the game
    public function version(string $version = null)
    {
        if($version == null)
        {
            $data = Version::orderBy('created_at')->first();
        }
        else 
        {
            $data = Version::where('name', $version)->first();
        }
        
        if($data == null)
        {
            return view('error', ['message' => '404 : cette version du jeu n\'existe pas']);
        }
        return view('version', ['version' => $data]);
    }

    public function addPost(Request $request)
    {

        $content = $request->input('content');

        $user = Anonymuser::where('ip', $request->ip());
        if($user == null)
        {
            $user = Anonymuser::create(['ip' => $request->ip(), 'last_post' => Carbon::now()->timestamp]);
        } 
        else 
        {
            $last_post = new Carbon($user->last_post);
            if($last_post->diffInMinutes(Carbon::now()) < 5) 
            {
                view('error');
            } 
            else 
            {
                $user->last_post = Carbon::now()->timestamp;
                $user->save();
            }
        }
    }
}
