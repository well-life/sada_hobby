<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_laporan';
    protected $fillable = ['nama_produk', 'harga', 'total_produk', 'total_transaksi', 'tanggal'];
}
