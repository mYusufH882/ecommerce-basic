<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Category::all();

        return view('dashboard.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' => 'required'
        ]);

        Category::create($data);

        return redirect()->route('kategori.index')->with('success', 'Data Kategori Berhasil Disimpan!!');
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
        $kategori = Category::find($id);

        return view('dashboard.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = Category::find($id);

        $data = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori->update($data);

        return redirect()->route('kategori.index')->with('success', 'Data Kategori Berhasil Diubah!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Category::find($id);

        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Data Kategori Berhasil Dihapus!!');
    }
}
