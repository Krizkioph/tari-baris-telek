<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Galeri;
use App\Models\Gerakan;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'admin' => Admin::all(),
            'galeri' => Galeri::all()->count(),
            'informasi' => Information::all()->count(),
        ]);

    }

    // =================================================================================
    // ===================================  Profile ====================================
    // =================================================================================

    public function profile()
    {
        return view('admin.profile');
    }

    public function ganti_nama()
    {
        return view('admin.ganti-nama');
    }

    // Update Nama Admin
    public function update_nama(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
        ], [
            'name.required' => 'Nama wajib diisi.',
        ]);

        // Update nama admin
        $admin = Admin::find(Auth::id());
        $admin->name = $request->name;
        $admin->save();

        toastr()->success('Nama berhasil diperbarui.');

        return redirect()->back();
    }


    public function ganti_password()
    {
        return view('admin.ganti-password');
    }

    // Ganti Password Admin
    public function update_password(Request $request)
    {
        // Validasi input
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:8',
            'password_confirmation' => 'required|same:password_baru',
        ], [
            'password_lama.required' => 'Password lama wajib diisi.',
            'password_baru.required' => 'Password baru wajib diisi.',
            'password_baru.min' => 'Password baru minimal 8 karakter.',
            'password_confirmation.required' => 'Konfirmasi password wajib diisi.',
            'password_confirmation.same' => 'Konfirmasi password tidak sama dengan password baru.',
        ]);

        // Cek password lama
        if (!password_verify($request->password_lama, Auth::user()->password)) {
            toastr()->error('Password lama salah.');
            return redirect()->back();
        }

        // Update password
        $admin = Admin::find(Auth::id());
        $admin->password = bcrypt($request->password_baru);
        $admin->save();

        toastr()->success('Password berhasil diperbarui. Silakan login kembali.');

        // Logout admin setelah password diubah
        Auth::logout();

        // Redirect ke halaman login
        return redirect()->route('login');

    }



    // =================================================================================
    // ===============================  Information ====================================
    // =================================================================================

    public function view_informasi()
    {
        return view('admin.view-informasi', [
            'informasi' => Information::with('admin')->paginate(4),
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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4048',
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
        $data->admin_id = Auth::id();

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
            'foto.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif, webp.',
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
        $data->admin_id = Auth::id();

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
            'galeri' => Galeri::with('admin')->paginate(4),
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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4048',
        ], [
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif, webp.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 4MB.',
        ]);

        // Simpan data ke database
        $data = new galeri();
        $data->deskripsi = $request->deskripsi;
        $data->admin_id = Auth::id();

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
            'foto.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif, webp.',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 4MB.',
        ]);

        // Simpan data ke database
        $data = Galeri::find($id);
        if (!$data) {
            toastr()->error('Foto tidak ditemukan.');
            return redirect()->back();
        }
        $data->deskripsi = $request->deskripsi;
        $data->admin_id = Auth::id();

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


    // =================================================================================
    // ===============================  Gerakan ====================================
    // =================================================================================


    public function view_gerakan()
    {
        return view('admin.view-gerakan', [
            'gerakan' => Gerakan::with('admin')->get(),
        ]);
    }


    public function tambah_gerakan()
    {
        abort(403, 'Halaman ini sedang dinonaktifkan.');
    }


    public function store_gerakan(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'link' => ['required', 'string', 'regex:/^(https:\/\/www\.youtube\.com\/embed\/[a-zA-Z0-9_-]+(\?[a-zA-Z0-9=_\-&%]*)?)$/'],
        ], [
            'judul.required' => 'Judul wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'link.required' => 'Link wajib diisi.',
            'link.regex' => 'Link harus berupa embed YouTube yang valid, contoh: https://www.youtube.com/embed/ID_VIDEO',
        ]);

        // Simpan data ke database
        $data = new Gerakan();
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->link = $request->link;
        $data->admin_id = Auth::id();

        $data->save();

        toastr()->success('Link Youtube berhasil ditambahkan ke Gerakan.');


        return redirect()->back();
    }

    public function edit_gerakan($id)
    {
        return view('admin.edit-gerakan', [
            'data' => Gerakan::find($id)
        ]);
    }

    public function update_gerakan(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'link' => ['required', 'string', 'regex:/^(https:\/\/www\.youtube\.com\/embed\/[a-zA-Z0-9_-]+(\?[a-zA-Z0-9=_\-&%]*)?)$/'],
        ], [
            'judul.required' => 'Judul wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'link.required' => 'Link wajib diisi.',
            'link.regex' => 'Link harus berupa embed YouTube yang valid, contoh: https://www.youtube.com/embed/ID_VIDEO',
        ]);

        // Simpan data ke database
        $data = Gerakan::find($id);
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->link = $request->link;
        $data->admin_id = Auth::id();

        $data->save();

        toastr()->success('Gerakan berhasil diupdate.');

        return redirect()->route('view_gerakan');
    }



}
