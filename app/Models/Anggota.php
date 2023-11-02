<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Petugas;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = [
        'kode_anggota',
        'nama_anggota',
        'jk_anggota',
        'jurusan_anggota',
        'no_telp_anggota',
        'alamat_anggota'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'peminjamans');
    }

    public function petugas()
    {
        return $this->belongsToMany(Petugas::class, 'peminjamans');
    }
}
