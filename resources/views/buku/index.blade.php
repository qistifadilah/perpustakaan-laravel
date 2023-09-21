@extends('layouts.master')
@include('separate.style')
@section('title', 'buku')
@section('h1', 'Data Buku')
@section('content')

    <body class="hold-transition sidebar-mini">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Table Buku</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Stok</th>
                                            <th>No. Rak</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($books as $key => $values)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $values->kode_buku }}</td>
                                                <td>{{ $values->judul_buku }}</td>
                                                <td>{{ $values->penulis_buku }}</td>
                                                <td>{{ $values->penerbit_buku }}</td>
                                                <td>{{ $values->tahun_terbit }}</td>
                                                <td>{{ $values->stok }}</td>
                                                <td>{{ $values->id_rak }}</td>
                                                <td>
                                                    <a href="" class="btn-sm btn-info">Show</a>
                                                    <a href="" class="btn-sm btn-warning">Edit</a>
                                                    <a href="" class="btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>Data masih kosong</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </body>
@endsection