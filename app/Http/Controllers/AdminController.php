<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.index', compact('user'));
    }

    public function view_informasi()
    {
        return view('admin.view-informasi');
    }

    public function create_informasi()
    {
        return view('admin.create-informasi');
    }

    public function view_galeri()
    {
        return view('admin.view-galeri');
    }

    public function create_galeri()
    {
        return view('admin.create-galeri');
    }
}
