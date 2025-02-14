<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'information';
    protected $fillable = ['user_id', 'judul', 'deskripsi', 'foto'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
