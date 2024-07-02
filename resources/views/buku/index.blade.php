@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('buku.create') }}" class="btn btn-outline-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Penerbit</th>
                            <th>Qty</th>
                            <th>Deskripsi</th>
                            <th>Penulis</th>
                            <th>Genre</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_buku }}</td>
                                <td>{{ $data->penerbit }}</td>
                                <td>{{ $data->qty }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>{{ $data->penulis }}</td>
                                <td>{{ $data->genre }}</td>
                                <td>
                                    <a href="{{ route('buku.edit', $data->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('buku.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
