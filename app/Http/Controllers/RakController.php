<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $raks = Rak::all();
        return view('rak.index', compact('raks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_rak' => 'required',
            'lokasi_rak' => 'required'
        ]);

        $raks = new Rak;
        $raks->nama_rak = $request->nama_rak;
        $raks->lokasi_rak = $request->lokasi_rak;
        $raks->save();

        return redirect()->route('rak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rak $raks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rak $rak)
    {
        //
        return view('rak.edit', compact('rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rak $raks)
    {
        //
        $request->validate([
            'nama_rak' => 'required',
            'lokasi_rak' => 'required'
        ]);

        $raks->update($request->all());

        return redirect()->route('rak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rak $raks)
    {
        //
        $raks = Rak::where('id', $raks->id)->delete();
        return redirect()->route('rak.index');
    }
}
