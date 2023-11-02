@extends('layouts.master')
@section('title', 'anggota')
@section('h1', 'Create Anggota')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('anggota.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" name="kode_anggota"
                                        class="form-control @error('kode_anggota') is-invalid @enderror" id="kode_anggota"
                                        value="{{ old('kode_anggota') }}" placeholder="Masukan kode">
                                </div>
                                @error('kode_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama_anggota">Nama</label>
                                    <input type="text" name="nama_anggota"
                                        class="form-control @error('nama_anggota') is-invalid @enderror" id="nama_anggota"
                                        value="{{ old('nama_anggota') }}" placeholder="Masukan nama">
                                </div>
                                @error('nama_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="jk_anggota">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input @error('jk_anggota') is-invalid @enderror"
                                            type="radio" id="l" value="L" name="jk_anggota">
                                        <label for="l" class="custom-control-label">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input @error('jk_anggota') is-invalid @enderror"
                                            type="radio" id="p" value="P" name="jk_anggota">
                                        <label for="p" class="custom-control-label">Perempuan</label>
                                    </div>
                                </div>
                                @error('jk_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select @error('jurusan_anggota') is-invalid @enderror"
                                        name="jurusan_anggota" value="">
                                        <option selected disabled>Pilih Jurusan {{ old('jurusan_anggota') }}</option>
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
                                        <input type="number" name="no_telp_anggota"
                                            class="form-control @error('no_telp_anggota') is-invalid @enderror"
                                            data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{ old('no_telp_anggota') }}" placeholder="Masukan angka">
                                    </div>
                                </div>
                                @error('no_telp_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control @error('alamat_anggota') is-invalid @enderror" name="alamat_anggota"
                                        value="{{ old('alamat_anggota') }}" placeholder="Masukan alamat"></textarea>
                                </div>
                                @error('alamat_anggota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <a class="btn btn-primary mr-3" href="{{ route('anggota.index') }}" role="button">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
