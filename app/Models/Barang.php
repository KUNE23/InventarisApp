<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar',
        'nama_barang',
        'id_jenis',
        'harga_beli',
        'harga_jual',
        'stok'
    ];

    public function Jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis', 'id');
    }
    public function BarangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_barang', 'id');
    }
    public function BarangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'id_barang', 'id');
    }
}
