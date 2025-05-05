<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Gerakan;
use App\Models\Information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'galeri' => Galeri::latest()->take(6)->get(),
            'informasi' => Information::latest()->take(3)->get(),
        ]);
    }

    public function sejarah()
    {
        return view('home.sejarah', [
            'informasi' => Information::latest()->paginate(3),
        ]);
    }

    public function busana()
    {
        return view('home.busana');
    }

    public function gerakan()
    {
        return view('home.gerakan', [
            'gerakan' => Gerakan::oldest()->get()
        ]);
    }

    public function galeri()
    {
        return view('home.galeri', [
            'galeri' => Galeri::latest()->paginate(6),
        ]);
    }

    public function tentang()
    {
        return view('home.tentang');
    }

    public function lokasi()
    {
        return view('home.lokasi');
    }



    public function show_informasi($id)
    {
        return view('home.show-informasi', [
            'informasi' => Information::findOrFail($id),
        ]);
    }

    public function show_galeri($id)
    {
        return view('home.show-galeri', [
            'foto' => Galeri::findOrFail($id),
        ]);
    }
}
