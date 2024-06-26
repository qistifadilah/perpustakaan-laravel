<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $librarians = DB::table('librarians')->get();
        return view('petugas.index', compact('librarians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required',
        ]);

        $query = DB::table('librarians')->insert([
            'nama_petugas' => $request['nama_petugas'],
            'jabatan_petugas' => $request['jabatan_petugas'],
            'no_telp_petugas' => $request['no_telp_petugas'],
            'alamat_petugas' => $request['alamat_petugas'],
        ]);

        return redirect('/petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $librarians = DB::table('librarians')->where('id', $id)->get();
        return view('petugas.show', compact('librarians'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $librarians = DB::table('librarians')->where('id', $id)->get();
        return view('petugas.edit', compact('librarians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required',
        ]);

        $query = DB::table('librarians')->update([
            'nama_petugas' => $request['nama_petugas'],
            'jabatan_petugas' => $request['jabatan_petugas'],
            'no_telp_petugas' => $request['no_telp_petugas'],
            'alamat_petugas' => $request['alamat_petugas'],
        ]);

        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('librarians')->where('id', $id)->delete();
        return redirect()->route('petugas.index');
    }
}
