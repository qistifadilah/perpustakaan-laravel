<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'librarians';
    protected $fillable = [
        'nama_petugas',
        'jabatan_petugas',
        'no_telp_petugas',
        'alamat_petugas'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function anggota()
    {
        return $this->belongsToMany(Anggota::class, 'peminjamans');
    }

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'peminjamans');
    }
}
