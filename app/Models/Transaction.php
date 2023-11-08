<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_user",
        "id_product",
        "invoice",
        "total_amount",
        "status",
        "total_qty"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public static function jumlahTransaksi()
    {
        return Transaction::get()->count();
    }
}
