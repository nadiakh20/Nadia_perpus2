<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjams';
    protected $fillable = [
        'id_anggota',
        'no_transaksi'
    ];
    public function anggota() {
        return $this->belongsTo(Anggota::class, 'id_anggota','id');
    }

    public function buku() {
        return $this->belongsTo(Buku::class, 'id_buku', 'nama_buku');
    }
}
