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

        $amount = doubleval($harga * $qty);
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
        $amount = $trans->total_amount;
        $qty = $trans->total_qty;

        $total = $amount * $qty;
        $total = number_format($total, 2, ',', '.');

        return view('belanja.konfirmasi-pembayaran', compact('trans', 'amount', 'qty'));
    }

    public function konfirmasi(Request $request)
    {
        $id_produk = $request->input('id_produk');
        $belanja = Transaction::where('id_product', $id_produk)->first();
        $produk = Product::find($id_produk);

        $bayar = $request->input('bayar');
        $qty = $belanja->total_qty;

        $request->validate([
            'bayar' => 'required'
        ]);

        $total = $qty * $produk->harga_produk;

        if ($bayar >= $belanja->total_amount) {
            $produk->update([
                'qty_produk' => $produk->qty_produk - $belanja->total_qty
            ]);

            $belanja->update([
                'total_amount' => $total,
                'total_qty' => $qty,
                'status' => 'Diproses'
            ]);

            return redirect()->back()->with('success', 'Pembayaran anda berhasil diproses!!');
        } else if ($bayar <= $belanja->total_amount) {
            return redirect()->route('pembayaran', $belanja->id)->with('failed', 'Uang yang anda bayarkan masih kurang!!!');
        }
    }
}
