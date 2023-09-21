@extends('layouts.master')
@section('title', 'rak')
@section('h1', 'Create Rak')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Rak</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('rak.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_rak">Nama Rak</label>
                                    <input class="form-control" type="text" name="nama_rak" id="nama_rak"
                                        placeholder="Input nama rak">
                                </div>
                                <div class="form-group">
                                    <label for="lokasi_rak">Lokasi Rak</label>
                                    <input class="form-control" type="text" name="lokasi_rak" id="lokasi_rak"
                                        placeholder="Input lokasi rak">
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