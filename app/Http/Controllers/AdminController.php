<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();
        $galeri = Galeri::all()->count();
        $informasi = Information::all()->count();
        return view('admin.index', compact('user', 'galeri', 'informasi'));
    }


    // =================================================================================
    // ===============================  Information ====================================
    // =================================================================================

    public function view_informasi()
    {
        return view('admin.view-informasi', [
            'informasi' => Information::with('user')->get(),
        ]);
    }

    public function tambah_informasi()
    {
        return view('admin.tambah-informasi');
    }

    public function store_informasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4048',
        ], [
            'judul.required' => 'Judul wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif, webp.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 4MB.',
        ]);

        // Simpan data ke database
        $data = new Information();
        $data->judul = $request->judul;
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

        toastr()->success('Informasi berhasil ditambahkan.');

        return redirect()->back();
    }

    public function edit_informasi($id)
    {
        return view('admin.edit-informasi', [
            'data' => Information::find($id)
        ]);
    }

    public function update_informasi(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:4048',
        ], [
            'judul.required' => 'Judul wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif,svg, webp.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 4MB.',
        ]);

        // Simpan data ke database
        $data = Information::find($id);
        if (!$data) {
            toastr()->error('Informasi tidak ditemukan.');
            return redirect()->back();
        }
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->user_id = Auth::id();

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($data->foto && file_exists(public_path('galeri/' . $data->foto))) {
                unlink(public_path('galeri/' . $data->foto));
            }

            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('galeri'), $namaFoto);
            $data->foto = $namaFoto;
        }

        $data->save();

        toastr()->success('Informasi berhasil diupdate.');

        return redirect()->route('view_informasi');
    }

    public function delete_informasi($id)
    {
        $data = Information::find($id);

        if (!$data) {
            toastr()->error('Informasi tidak ditemukan.');
            return redirect()->back();
        }

        // Hapus foto
        if ($data->foto && file_exists(public_path('galeri/' . $data->foto))) {
            unlink(public_path('galeri/' . $data->foto));
        }

        $data->delete();

        toastr()->success('Informasi berhasil dihapus.');

        return redirect()->back();
    }


    // =================================================================================
    // ====================================  Galeri ====================================
    // =================================================================================

    public function view_galeri()
    {
        return view('admin.view-galeri', [
            'galeri' => Galeri::with('user')->get(),
        ]);
    }


    public function tambah_galeri()
    {

        return view('admin.tambah-galeri');
    }

    public function store_galeri(Request $request)
    {
        // Validasi input
        $request->validate([
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4048',
        ], [
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif, svg, webp.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 4MB.',
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

    public function edit_galeri($id)
    {

        return view('admin.edit-galeri', [
            'data' => Galeri::find($id)
        ]);
    }

    public function update_galeri(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4048',
        ], [
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif, svg, webp.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 4MB.',
        ]);

        // Simpan data ke database
        $data = Galeri::find($id);
        if (!$data) {
            toastr()->error('Foto tidak ditemukan.');
            return redirect()->back();
        }
        $data->deskripsi = $request->deskripsi;
        $data->user_id = Auth::id();

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($data->foto && file_exists(public_path('galeri/' . $data->foto))) {
                unlink(public_path('galeri/' . $data->foto));
            }

            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('galeri'), $namaFoto);
            $data->foto = $namaFoto;
        }

        $data->save();

        toastr()->success('Foto berhasil diupdate.');

        return redirect()->route('view_galeri');
    }

    public function delete_galeri($id)
    {
        $data = Galeri::find($id);
        if (!$data) {
            toastr()->error('Foto tidak ditemukan.');
            return redirect()->back();
        }

        // Hapus foto
        if ($data->foto && file_exists(public_path('galeri/' . $data->foto))) {
            unlink(public_path('galeri/' . $data->foto));
        }

        $data->delete();

        toastr()->success('Foto berhasil dihapus.');

        return redirect()->back();
    }
}
