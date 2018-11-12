<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Version;
use App\Anonymuser;
use Carbon\Carbon;

class PostController extends Controller
{

    public function add($versionName, Request $request)
    {
        $version = Version::where('name', $versionName)->first();
        if($version == null)
        {
            return view('error', ['message' => '404 : cette version du jeu n\'existe pas']);
        }

        $content = $request->input('content');
        $givenName = $request->input('given_name');

        $user = Anonymuser::where('ip', $request->ip())->first();
        if($user == null)
        {
            $user = Anonymuser::create([
                'ip'        => $request->ip(), 
                'last_post' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        else
        {
            $last_post = new Carbon($user->last_post);
            if($last_post->diffInMinutes(Carbon::now()) < 5)
            {
                // flash to indicate you cant post
                return redirect()->route('version', ['version' => $versionName])->with('posted', 'no');
            }
            else
            {
                $user->last_post = Carbon::now()->format('Y-m-d H:i:s');
                $user->save();
            }
        }

        Post::create([
            'content'       => $content,
            'anonymuser_id' => $user->id,
            'version_id'    => $version->id,
            'given_name'    => $givenName
        ]);

        return redirect()->route('version', ['version' => $versionName]);;
    }
}
