@extends('layouts.master')
@section('h1', 'Show Buku')
@section('title', 'buku')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Buku</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_buku">Kode Buku</label>
                                    <input class="form-control" type="text" name="kode_buku" id="kode_buku"
                                        placeholder="Input kode" value="{{ $buku->kode_buku }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="judul_buku">Judul</label>
                                    <input class="form-control" type="text" name="judul_buku" id="judul_buku"
                                        placeholder="Input judul" value="{{ $buku->judul_buku }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="penulis_buku" name="penulis_buku" id="penulis_buku">Penulis</label>
                                    <input class="form-control" type="text" name="penulis_buku" id="penulis_buku"
                                        placeholder="Input nama penulis" value="{{ $buku->penulis_buku }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="penerbit_buku" name="penerbit_buku" id="penerbit_buku">Penerbit</label>
                                    <input class="form-control" type="text" name="penerbit_buku" id="penerbit_buku"
                                        placeholder="Input nama penerbit" value="{{ $buku->penerbit_buku }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_terbit" name="tahun_terbit" id="tahun_terbit">Tahun Terbit</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input class="form-control" type="number" name="tahun_terbit" id="tahun_terbit" value="{{ $buku->tahun_terbit }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stok" name="stok" id="stok">Stok Buku</label>
                                    <input class="form-control" type="number" name="stok"
                                        id="stok" placeholder="Input angka" value="{{ $buku->stok }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="rak">Rak</label>
                                    <select name="id_rak" id="rak" class="form-control">
                                        <option value="{{ $rak->id }}" selected>{{ $rak->nama_rak }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection

</html>
