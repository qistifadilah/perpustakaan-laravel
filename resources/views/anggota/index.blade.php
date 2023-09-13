@extends('layouts.master')
@section('h1', 'Data Anggota')
@include('separate.style')
@section('content')
    <body class="hold-transition sidebar-mini">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Anggota</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jurusan</th>
                                            <th>No. Telepon</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($members as $key => $values)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $values->kode_anggota }}</td>
                                                <td>{{ $values->nama_anggota }}</td>
                                                <td>{{ $values->jk_anggota }}</td>
                                                <td>{{ $values->jurusan_anggota }}</td>
                                                <td>{{ $values->no_telp_anggota }}</td>
                                                <td>{{ $values->alamat_anggota }}</td>
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