@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('buku.store') }}" method="POST">
                <form action="" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Nama Buku</label>
                        <input type="text" name="nama_buku" placeholder="Masukkan Nama Buku" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Penerbit</label>
                        <input type="text" name="penerbit" placeholder="Masukkan Penerbit" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Qty</label>
                        <input type="number" name="qty" placeholder="Masukkan Penerbit" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Penulis</label>
                        <input type="text" name="penulis" placeholder="Masukkan Penulis" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Genre</label>
                        <input type="text" name="genre" placeholder="Isi Genre" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="simpan">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                    </div>
            </form>
        </div>
    </div>
@endsection
