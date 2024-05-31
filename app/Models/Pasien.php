<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = ['nama', 'ttl', 'jenis_kelamin', 'phone', 'email', 'alamat'];

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class);
    }

    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}
