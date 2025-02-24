<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'information';
    protected $fillable = ['admin_id', 'judul', 'deskripsi', 'foto'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
