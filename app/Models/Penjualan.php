<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'user_id',
        'pelanggan_id',
        'tanggal',
        'total',
    ];

    // Relasi ke User (Kasir/Admin yang melakukan transaksi)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // Relasi ke Detail Penjualan
    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class);
    }
}