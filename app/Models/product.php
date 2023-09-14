<?php

namespace App\Models;

use App\Models\etalase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_product';
    protected $fillable = ['nama', 'harga', 'stok', 'deskripsi', 'image', 'id_etalase'];
    public $timestamps = false;
    public function etalase()
    {
        return $this->belongsTo(etalase::class, 'id_etalase', 'id_etalase');
    }
}
