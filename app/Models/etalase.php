<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class etalase extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_etalase';
    protected $fillable = ['nama'];
    public $timestamps = false;
    public function product()
    {
        return $this->hasMany(product::class, 'id_etalase', 'id_etalase');
    }
}
