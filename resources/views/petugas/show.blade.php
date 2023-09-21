@extends('layouts.master')
@section('title', 'petugas')
@section('h1', 'Show Petugas')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data Petugas</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_petugas">Nama Petugas</label>
                                <input class="form-control" type="text" name="nama_petugas" id="nama_petugas"
                                    value="{{ $librarians[0]->nama_petugas }}" placeholder="Masukan nama petugas" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jabatan_petugas">Jabatan</label>
                                <input class="form-control" type="text" name="jabatan_petugas" id="jabatan_petugas"
                                    value="{{ $librarians[0]->jabatan_petugas }}" placeholder="Masukan jabatan" disabled>
                            </div>
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" name="no_telp_petugas" class="form-control"
                                        data-inputmask='"mask": "(999) 999-9999"' data-mask
                                        value="{{ $librarians[0]->no_telp_petugas }}" placeholder="Masukan angka" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat_petugas" rows="3" placeholder="Masukan alamat" disabled>{{ $librarians[0]->alamat_petugas }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-info" href="{{ route('petugas.index') }}" role="button">Back</a>
                        </div>
                    </div>
                </div>{{-- form --}}
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
