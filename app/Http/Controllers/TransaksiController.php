<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaction::all();

        return view('dashboard.transaksi.index', compact('transaksi'));
    }
}
