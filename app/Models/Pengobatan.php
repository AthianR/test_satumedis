<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengobatan extends Model
{
    use HasFactory;
    protected $table = 'pengobatan';
    protected $fillable = [
        'nama',
        'deskripsi',
        'diagnosa',
    ];

    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}
