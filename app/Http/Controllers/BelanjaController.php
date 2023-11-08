<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function show($id)
    {
        $belanja = Product::find($id);

        return view('belanja.detail-shop', compact('belanja'));
    }

    public function beli(Request $request)
    {
        $belanja = Product::find($request->input('id_produk'));
        $transaksi = new Transaction();

        $request->validate([
            'qty' => 'required'
        ]);

        $harga = $belanja->harga_produk;
        $qty = $request->input('qty');

        $amount = $harga * $qty;

        $nmprod = strtoupper(substr($belanja->nama_produk, 0, 2));

        $transaksi->id_user = auth()->user()->id;
        $transaksi->id_product = $belanja->id;
        $transaksi->invoice = $nmprod . '-' . uniqid();
        $transaksi->total_amount = $amount;
        $transaksi->status = 'Pending';
        $transaksi->total_qty = $request->input('qty');

        $transaksi->save();

        if ($transaksi)
            return redirect()->route('pembayaran', $transaksi->id)->with('success', 'Pembayaran anda berhasil di proses!!');
        else
            return redirect()->back();
    }

    public function view_pembayaran($id)
    {
        $trans = Transaction::find($id);

        return view('belanja.konfirmasi-pembayaran', compact('trans'));
    }

    public function konfirmasi(Request $request)
    {
        $id_produk = $request->input('id_produk');
        $belanja = Transaction::where('id_product', $id_produk)->first();
        $produk = Product::find($id_produk);

        $bayar = $request->input('bayar');
        $amount = $belanja->total_amount;
        $qty = $belanja->total_qty;

        $request->validate([
            'bayar' => 'required'
        ]);

        if ($bayar >= $amount) {
            $produk->update([
                'qty_produk' => $produk->qty_produk - $belanja->total_qty
            ]);

            $belanja->update([
                'total_qty' => $qty,
                'status' => 'Diproses'
            ]);

            return redirect()->back()->with('message', 'Pembayaran anda berhasil diproses!!');
        } else {
            return redirect()->route('pembayaran', $belanja->id)->with('message', 'Uang yang anda bayarkan masih kurang!!!');
        }
    }
}
