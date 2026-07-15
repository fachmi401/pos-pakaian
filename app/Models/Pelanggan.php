<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'telepon',
        'email'
    ];

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class);
    }
}