class Produk extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama_produk',
        'ukuran',
        'warna',
        'harga',
        'stok'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class);
    }
}