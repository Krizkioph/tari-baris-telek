<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerakan extends Model
{
    protected $table = 'gerakan';

    protected $fillable = ['admin_id', 'judul', 'deskripsi', 'link'];

    public function admin()
    {
        // Relasi tabel galeri dengan admin (one to many)
        return $this->belongsTo(Admin::class);
    }
}
