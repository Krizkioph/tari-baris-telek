<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sejarah()
    {
        return view('home.sejarah');
    }

    public function busana()
    {
        return view('home.busana');
    }
}
