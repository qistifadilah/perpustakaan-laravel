@extends('layouts.master')
@section('title', 'rak')
@section('h1', 'Edit Rak')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Form Rak</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('rak.update', $rak->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_rak">Nama Rak</label>
                                    <input class="form-control @error('nama_rak') is-invalid @enderror" type="text"
                                        name="nama_rak" id="nama_rak" placeholder="Input nama rak"
                                        value="{{ $rak->nama_rak }}">
                                </div>
                                @error('nama_rak')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="lokasi_rak">Lokasi Rak</label>
                                    <input class="form-control @error('lokasi_rak') is-invalid @enderror" type="text"
                                        name="lokasi_rak" id="lokasi_rak" placeholder="Input lokasi rak"
                                        value="{{ $rak->lokasi_rak }}">
                                </div>
                                @error('lokasi_rak')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="update" class="btn btn-warning">Update</button>
                                <input type="button" class="btn btn-warning" value="Back" onclick="history.back()">
                            </div>
                        </form>
                    </div>
                </div>{{-- form --}}
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
