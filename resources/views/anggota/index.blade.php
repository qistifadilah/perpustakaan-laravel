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
                                <h3 class="card-title">Table Anggota</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Anggota</th>
                                            <th>Nama Anggota</th>
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
                                                    <form action="{{ route('anggota.destroy', $values->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('anggota.show', $values->id) }}"
                                                            class="btn-sm btn-info">Show</a>
                                                        <a href="{{ route('anggota.edit', $values->id) }}"
                                                            class="btn-sm btn-warning">Edit</a>
                                                        <button class="btn-sm btn-danger" data-toggle="modal"
                                                            data-target="#modal-sm">Delete</button>

                                                    </form>
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
                            {{-- card footer --}}
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-3">
                                        <a class="btn btn-primary" href="{{ route('anggota.create') }}" role="button">
                                            <i class="fas fa-plus"></i>
                                             Data Anggota</a>
                                    </div>
                                    <div class="col-3">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example2_previous"><a href="#" aria-controls="example2"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item"><a href="#"
                                                        aria-controls="example2" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item next disable" id="example2_next"><a
                                                        href="#" aria-controls="example2" data-dt-idx="3"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
