<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function Peminjaman()    {

        $datas = Peminjaman::get();
        return view('peminjaman.index', compact('datas'));
    }

    public function TambahPeminjaman()
    {
        $datas = Peminjaman::get();
        $books = Buku::get();
        $title = "Tambah Peminjam";
        $anggotas = Anggota::orderBy('id', 'desc')->get();
        $no_transaksi = Peminjaman::orderBy('id', 'desc')->first();
        $huruf = "TR";
        $urutan = $no_transaksi->id;
        $urutan++;
        $no_transaksi = $huruf . date("dmY") . sprintf("%03s", $urutan);
        return view('peminjaman.create', compact('datas', 'buku', 'title', 'anggotas', 'no_transaksi'));
    }

    public function AksiTambahPeminjaman(Request $request)
    {
        Peminjaman::create($request->all());
        return redirect()->route('peminjaman');
    }

    public function ShowPeminjaman()
    {
        return view('peminjaman.detail');
    }

    public function DeletePeminjaman()
    {

    }

    public function Pengembalian()
    {

    }


}
