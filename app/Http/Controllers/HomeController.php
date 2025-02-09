<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'galeri' => Galeri::latest()->take(6)->get(),
        ]);
    }

    public function sejarah()
    {
        return view('home.sejarah');
    }

    public function busana()
    {
        return view('home.busana');
    }
}
