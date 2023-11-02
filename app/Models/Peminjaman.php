<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamans';
    protected $fillable = [
        'id_buku',
        'id_anggota',
        'id_petugas',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_buku', 'id');
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'id_anggota', 'id');
    }

    public function petugas()
    {
        return $this->hasMany(Petugas::class, 'id_petugas', 'id');
    }
}
