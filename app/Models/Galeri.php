<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = ['user_id', 'deskripsi', 'foto'];

    public function user()
    {
        // Relasi tabel galeri dengan user (one to many)
        return $this->belongsTo(User::class);
    }
}
