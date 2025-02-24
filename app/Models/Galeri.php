<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = ['admin_id', 'deskripsi', 'foto'];

    public function admin()
    {
        // Relasi tabel galeri dengan admin (one to many)
        return $this->belongsTo(Admin::class);
    }
}
