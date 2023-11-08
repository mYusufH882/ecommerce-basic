<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id_category' => 1,
            'gambar_produk' => 'laptop.jpeg',
            'nama_produk' => 'Laptop',
            'deskripsi_produk' => 'Laptop adalah perangkat komputer portabel yang dapat dibawa ke mana saja.',
            'harga_produk' => '5500000',
            'qty_produk' => 5,
        ]);

        Product::create([
            'id_category' => 1,
            'gambar_produk' => 'smartphone.jpeg',
            'nama_produk' => 'Smartphone',
            'deskripsi_produk' => 'Smartphone adalah perangkat elektronik yang telah menjadi bagian penting dari kehidupan sehari-hari.',
            'harga_produk' => '2500000',
            'qty_produk' => 10,
        ]);

        Product::create([
            'id_category' => 2,
            'gambar_produk' => 'kemejabatik.jpeg',
            'nama_produk' => 'Kemeja Batik',
            'deskripsi_produk' => 'Kemeja batik dengan corak batik yang elegan dan nyaman saat digunakan.',
            'harga_produk' => '120000',
            'qty_produk' => 5,
        ]);

        Product::create([
            'id_category' => 2,
            'gambar_produk' => 'celanakatun.jpg',
            'nama_produk' => 'Celana Katun',
            'deskripsi_produk' => 'Celana katun yang paling nyaman dengan bahan yang lembut dan awet.',
            'harga_produk' => '2500000',
            'qty_produk' => 10,
        ]);
    }
}
