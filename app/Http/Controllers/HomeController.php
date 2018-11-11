<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Version;

class HomeController extends Controller
{

    // give a specific version of the game
    public function version(string $versionName = null)
    {
        $version = Version::getNamedOrLatest($versionName);

        if($version == null)
        {
            return view('error', ['message' => '404 : cette version du jeu n\'existe pas']);
        }

        return view('version', ['version' => $version]);
    }
}
