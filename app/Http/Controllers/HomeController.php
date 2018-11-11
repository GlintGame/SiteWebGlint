<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Version;

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

        if($version == null)
        {
            return view('error', ['message' => '404 : cette version du jeu n\'existe pas']);
        }

        return view('version', ['version' => $version]);
    }
}
