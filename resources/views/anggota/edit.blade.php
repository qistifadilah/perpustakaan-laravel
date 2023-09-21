@extends('layouts.master')
@section('title', 'anggota')
@section('h1', 'Edit Anggota')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Data Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('anggota.update', $members[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" name="kode_anggota" class="form-control" id="kode_anggota"
                                        placeholder="Masukan kode" value="{{ $members[0]->kode_anggota }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_anggota">Nama</label>
                                    <input type="text" name="nama_anggota" class="form-control" id="nama_anggota"
                                        placeholder="Masukan nama" value="{{ $members[0]->nama_anggota }}">
                                </div>
                                <div class="form-group">
                                    <label for="jk_anggota">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="l" value="L"
                                            name="jk_anggota" value="{{ $members[0]->jk_anggota }}">
                                        <label for="l" class="custom-control-label" >Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="p" value="P"
                                            name="jk_anggota" value="{{ $members[0]->jk_anggota }}">
                                        <label for="p" class="custom-control-label" >Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select" name="jurusan_anggota" >
                                        <option selected disabled>{{ $members[0]->jurusan_anggota }}</option>
                                        <option>RPL</option>
                                        <option>DPIB</option>
                                        <option>TP</option>
                                        <option>TFLM</option>
                                        <option>TEI</option>
                                        <option>TITL</option>
                                        <option>TKJ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" name="no_telp_anggota" class="form-control"
                                            data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" value="{{ $members[0]->no_telp_anggota }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat_anggota" placeholder="Masukan alamat">{{ $members[0]->alamat_anggota }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <a class="btn btn-warning" href="{{ route('anggota.index') }}" role="button">Back</a>
                                    <button type="update" class="btn btn-warning">Update</button>
                                </div>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
