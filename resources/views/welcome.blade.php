@extends('layouts.master')
@section('title', 'dashboard')
@section('h1', 'Dashboard')
<!-- Main content -->
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Data Anggota</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Lorem ipsum dolor sit amet.</h6>

                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, sequi?</p>
                        <a href="#" class="btn btn-primary">Click me</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Data Buku</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Lorem ipsum dolor sit amet.</h6>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus,
                            asperiores!</p>
                        <a href="{{ route('buku.create') }}" class="btn btn-primary">Click me</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Data Petugas</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Lorem ipsum dolor sit amet.</h6>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus,
                            asperiores!</p>
                        <a href="#" class="btn btn-primary">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
