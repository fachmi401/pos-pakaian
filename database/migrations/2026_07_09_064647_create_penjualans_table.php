<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'pelanggan_id',
        'kasir_id',
        'tanggal',
        'total',
    ];

    // Relasi ke pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // Relasi ke kasir
    public function kasir()
    {
        return $this->belongsTo(Kasir::class);
    }

    // Relasi ke detail penjualan
    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class);
    }
}