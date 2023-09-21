@extends('layouts.master')
@section('title', 'anggota')
@section('h1', 'Show Anggota')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kode_anggota">Kode Anggota</label>
                                <input type="text" name="kode_anggota" class="form-control" id="kode_anggota"
                                    placeholder="Masukan kode" value="{{ $members[0]->kode_anggota }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama_anggota">Nama</label>
                                <input type="text" name="nama_anggota" class="form-control" id="nama_anggota"
                                    placeholder="Masukan nama" value="{{ $members[0]->nama_anggota }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jk_anggota">Jenis Kelamin</label>
                                <input type="text" name="jk_anggota" class="form-control" id="jk_anggota"
                                    placeholder="Masukan jenis kelamin" value="{{ $members[0]->jk_anggota }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="custom-select" name="jurusan_anggota"
                                    value="">
                                    <option selected disabled>{{ $members[0]->jurusan_anggota }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" name="no_telp_anggota" class="form-control"
                                        data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka"
                                        value="{{ $members[0]->no_telp_anggota }}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat_anggota" placeholder="Masukan alamat" disabled>{{ $members[0]->alamat_anggota }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-info" href="{{ route('anggota.index') }}" role="button">Back</a>
                        </div>
                        <!-- /.content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
