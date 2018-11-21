<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Version;
use App\Post;

class HomeController extends Controller
{

    public function home()
    {
        $versions = Version::orderBy('created_at')->get();
        
        return view('home', ['versions' => $versions]);
    }

    // give a specific version of the game
    public function version(string $versionName)
    {
        $version =  Version::where('name', $versionName)->first();
        $posts = Post::where('version_id', $version->id)->orderBy('CREATED_AT', 'DESC')->get();

        if($version == null)
        {
            return view('error', ['message' => 'Cette version du jeu n\'existe pas', 'background' => '404']);
        }

        return view('version', ['version' => $version, 'posts' => $posts]);
    }
}
