<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = Jenis::all();
        return view('home.jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('home.jenis.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jenis::create([
            'nama_jenis' => $request->nama_jenis,
        ]);
        return redirect('/jenis')->with('success','Jenis berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jenis = Jenis::find($id);
        return view('home.jenis.edit', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jenis = Jenis::find($id);
        $jenis->update([
            'nama_jenis' => $request->nama_jenis,
        ]);
        return redirect('/jenis')->with('success', 'Data Berhasil Di Update!!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect('/jenis');
    }
}
