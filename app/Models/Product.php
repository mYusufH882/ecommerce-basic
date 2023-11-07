<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_category",
        "gambar_produk",
        "nama_produk",
        "deskripsi_produk",
        "harga_produk",
        "qty_produk"
    ];

    public function category()
    {
        $this->belongsTo(Category::class, 'id_category', 'id');
    }
}
