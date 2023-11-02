<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Rak $rak)
    {
        //
        $rak = $rak->all();
        return view('buku.create', compact('rak'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Buku $buku)
    {
        //
        $request->validate([
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'id_rak' => 'required',
        ]);

        // insert data use Eloquent ORM
        $buku::create([
            'kode_buku' => $request['kode_buku'],
            'judul_buku' => $request['judul_buku'],
            'penulis_buku' => $request['penulis_buku'],
            'penerbit_buku' => $request['penerbit_buku'],
            'tahun_terbit' => $request['tahun_terbit'],
            'stok' => $request['stok'],
            'id_rak' => $request['id_rak']
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku, Rak $rak)
    {
        //
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rak $rak)
    {
        //
        $rak = $rak->all();
        return view('buku.create', compact('rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
        $request->validate([
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'id_rak' => 'required',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
        //$buku = Buku::find($id);
        //$buku->delete();
        $buku = Buku::where('id', $buku->id)->delete();
        return redirect()->route('buku.index');
    }
}
