<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Product::all();

        return view('dashboard.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::all();

        return view('dashboard.produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Product();

        $request->validate([
            'id_category' => 'required',
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'qty_produk' => 'required'
        ]);

        $produk->id_category = $request->input('id_category');
        $produk->nama_produk = $request->input('nama_produk');
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->harga_produk = doubleval($request->input('harga_produk'));
        $produk->qty_produk = $request->input('qty_produk');

        if ($request->hasFile('gambar_produk')) {
            $request->validate([
                'gambar_produk' => 'image|mimes:jpg,png,jpeg|max:2048'
            ]);

            $namaGambar = $request->file('gambar_produk')->getClientOriginalName();
            $request->file('gambar_produk')->move(public_path('gambar_produk'), $namaGambar);
        }

        $produk->gambar_produk = ($request->hasFile('gambar_produk')) ? $namaGambar : "";
        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Data Produk Berhasil Disimpan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Product::find($id);
        $kategori = Category::all();

        return view('dashboard.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Product::find($id);

        $request->validate([
            'id_category' => 'required',
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'qty_produk' => 'required'
        ]);

        $produk->id_category = $request->input('id_category');
        $produk->nama_produk = $request->input('nama_produk');
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->harga_produk = doubleval($request->input('harga_produk'));
        $produk->qty_produk = $request->input('qty_produk');

        if ($request->hasFile('gambar_produk')) {
            $request->validate([
                'gambar_produk' => 'image|mimes:jpg,png,jpeg|max:2048'
            ]);

            if ($produk->gambar_produk) {
                unlink(public_path('gambar_produk') . '/' . $produk->gambar_produk);
            }

            $namaGambar = $request->file('gambar_produk')->getClientOriginalName();
            $request->file('gambar_produk')->move(public_path('gambar_produk'), $namaGambar);
        }


        $produk->gambar_produk = ($request->hasFile('gambar_produk')) ? $namaGambar : $produk->gambar_produk;
        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Data Produk Berhasil Diubah!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Product::find($id);
        if ($produk->gambar_produk) {
            unlink(public_path('gambar_produk') . '/' . $produk->gambar_produk);
        }

        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Data Berhasil Dihapus!!');
    }
}
