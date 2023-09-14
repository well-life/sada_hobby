<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class history extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_history';
    protected $fillable = ['admin_id', 'deskripsi'];
    public function User()
    {
        return $this->belongsTo(User::class, 'admin_id', 'admin_id');
    }
}
