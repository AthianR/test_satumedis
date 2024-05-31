<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $table = 'resep';
    protected $fillable = ['id_pasien', 'id_pengobatan', 'tanggal', 'dosis', 'intruksi'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function pengobatan()
    {
        return $this->belongsTo(Pengobatan::class);
    }
}
