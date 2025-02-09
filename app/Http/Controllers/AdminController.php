<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('admin.view-galeri', [
            'data' => Galeri::with('user')->get(),
        ]);
    }


    public function create_galeri()
    {

        return view('admin.create-galeri');
    }

    public function store_galeri(Request $request)
    {
        // Validasi input
        $request->validate([
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ], [
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif, svg.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 8MB.',
        ]);

        // Simpan data ke database
        $data = new galeri();
        $data->deskripsi = $request->deskripsi;
        $data->user_id = Auth::id();

        // Handle file upload
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('galeri'), $namaFoto);
            $data->foto = $namaFoto;
        }

        $data->save();

        toastr()->success('Foto berhasil ditambahkan ke Galeri.');


        return redirect()->back();
    }
}
