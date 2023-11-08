<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $transaksi = new Transaction();

        if (auth()->user()->role == "admin") {
            $transaksi = $transaksi->all();
        } else {
            $transaksi = $transaksi->where('id_user', auth()->user()->id)->get();
        }

        $data = [
            'jkategori' => Category::jumlahKategori(),
            'jproduk' => Product::jumlahProduk(),
            'jtransaksi' => Transaction::jumlahTransaksi()
        ];

        return view('dashboard.home', compact('transaksi', 'data'));
    }

    public function profile()
    {
        return view('dashboard.profile');
    }
}
