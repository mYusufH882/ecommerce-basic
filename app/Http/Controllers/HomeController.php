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
        $transaksi = Transaction::where('id_user', auth()->user()->id)->get();
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
