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
                            <h3 class="card-title">Form Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('anggota.update', $members[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" name="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" id="kode_anggota"
                                        placeholder="Masukan kode" value="{{ $members[0]->kode_anggota }}">
                                </div>
                                @error('kode_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama_anggota">Nama</label>
                                    <input type="text" name="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" id="nama_anggota"
                                        placeholder="Masukan nama" value="{{ $members[0]->nama_anggota }}">
                                </div>
                                @error('nama_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="jk_anggota">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input @error('jk_anggota') is-invalid @enderror" type="radio" id="l" value="L"
                                            name="jk_anggota" @if ($members[0]->jk_anggota === 'L') checked @endif>
                                        <label for="l" class="custom-control-label" >Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input @error('jk_anggota') is-invalid @enderror" type="radio" id="p" value="P"
                                            name="jk_anggota" @if ($members[0]->jk_anggota === 'P') checked @endif>
                                        <label for="p" class="custom-control-label" >Perempuan</label>
                                    </div>
                                </div>
                                @error('jk_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select @error('jurusan_anggota') is-invalid @enderror" name="jurusan_anggota" >
                                        <option selected>{{ $members[0]->jurusan_anggota }}</option>
                                        <option>RPL</option>
                                        <option>DPIB</option>
                                        <option>TP</option>
                                        <option>TFLM</option>
                                        <option>TEI</option>
                                        <option>TITL</option>
                                        <option>TKJ</option>
                                    </select>
                                </div>
                                @error('jurusan_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" name="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror"
                                            data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" value="{{ $members[0]->no_telp_anggota }}">
                                    </div>
                                </div>
                                @error('no_telp_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control @error('no_telp_anggota') is-invalid @enderror" name="alamat_anggota" placeholder="Masukan alamat">{{ $members[0]->alamat_anggota }}</textarea>
                                </div>
                                @error('alamat_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <a class="btn btn-warning mr-3" href="{{ route('anggota.index') }}" role="button">Back</a>
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
