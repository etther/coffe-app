<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coffe;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama', 'alamat', 'nohp', 'coffe_id', 'quantity', 'total_harga'];

    public function coffee()
    {
        return $this->belongsTo(Coffe::class, 'coffe_id');
    }
}
