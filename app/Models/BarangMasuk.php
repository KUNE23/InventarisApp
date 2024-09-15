<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $fillable= [
        'id_barang',
        'id_supplier',
        'jumlah'
    ];
            
// app/Models/BarangMasuk.php
public function Barang()
{
    return $this->belongsTo(Barang::class, 'id_barang');
}

public function Supplier()
{
    return $this->belongsTo(Supplier::class, 'id_supplier');
}
}
