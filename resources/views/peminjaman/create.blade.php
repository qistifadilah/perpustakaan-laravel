@extends('layouts.master')
@section('title', 'peminjaman')
@section('h1', 'Create Peminjaman')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Peminjaman</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('peminjaman.store', $anggota[0]->id, $buku[0]->id, $petugas[0]->id) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_anggota">Nama Anggota</label>
                                    <select name="nama_anggota" id="nama_anggota" class="form-control">
                                        <option disabled selected>--Pilih Salah Satu--</option>
                                        @forelse ($anggota as $key => $anggota)
                                            <option value="{{ $anggota->id }}">{{ $anggota->nama_anggota }}</option>
                                        @empty
                                            <option disabled>--Data Masih Kosong--</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul_buku">Judul Buku</label>
                                    <select name="judul_buku" id="judul_buku" class="form-control">
                                        <option disabled selected>--Pilih Salah Satu--</option>
                                        @forelse ($buku as $key => $buku)
                                        <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option>
                                        @empty
                                        <option disabled>--Data Masih Kosong--</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_pinjam" name="tanggal_pinjam" id="tanggal_pinjam">Tanggal Pinjam</label>
                                    <input class="form-control" type="date" name="tanggal_pinjam"
                                        id="tanggal_pinjam" placeholder="Input Tanggal Pinjam">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_kembali" name="tanggal_kembali" id="tanggal_kembali">Tanggal Kembali</label>
                                    <input class="form-control" type="date" name="tanggal_kembali"
                                        id="tanggal_kembali" placeholder="Input Tanggal Kembali">
                                </div>
                                <div class="form-group">
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <select name="nama_petugas" id="nama_petugas" class="form-control">
                                        <option disabled selected>--Pilih Salah Satu--</option>
                                        @forelse ($petugas as $key => $petugas)
                                            <option value="{{ $petugas->id }}">{{ $petugas->nama_petugas }}</option>
                                        @empty
                                            <option disabled>--Data Masih Kosong--</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>{{-- form --}}
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection