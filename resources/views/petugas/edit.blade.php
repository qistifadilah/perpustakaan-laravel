@extends('layouts.master')
@section('title', 'petugas')
@section('h1', 'Edit Petugas')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Form Petugas</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('petugas.update', $librarians[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <input class="form-control @error('nama_petugas') is-invalid @enderror" type="text"
                                        name="nama_petugas" id="nama_petugas" value="{{ $librarians[0]->nama_petugas }}"
                                        placeholder="Masukan nama petugas">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control @error('jabatan_petugas') is-invalid @enderror"
                                        type="text" name="jabatan_petugas" id="jabatan_petugas"
                                        value="{{ $librarians[0]->jabatan_petugas }}" placeholder="Masukan jabatan">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" name="no_telp_petugas"
                                            class="form-control @error('no_telp_petugas') is-invalid @enderror"
                                            data-inputmask='"mask": "(999) 999-9999"'
                                            data-mask value="{{ $librarians[0]->no_telp_petugas }}"
                                            placeholder="Masukan angka">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control @error('alamat_petugas') is-invalid @enderror" name="alamat_petugas"
                                        rows="3" placeholder="Masukan alamat">{{ $librarians[0]->alamat_petugas }} </textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <a class="btn btn-warning mr-3" href="{{ route('anggota.index') }}" role="button">Back</a>
                                    <button type="update" class="btn btn-warning">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>{{-- form --}}
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
