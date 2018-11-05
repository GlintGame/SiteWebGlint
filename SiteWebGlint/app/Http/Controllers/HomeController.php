<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the main page of the website
     *
     * @return View
     */
    public function home()
    {
        $data = ['message' => 'Site en construction'];
        return view('error', $data);
    }
}