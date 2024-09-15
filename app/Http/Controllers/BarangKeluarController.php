<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_keluar = BarangKeluar::all();
        return view('home.barang_keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang_keluar = BarangKeluar::all();
        $barang = Barang::all();
        return view('home.barang_keluar.tambah', compact('barang_keluar','barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id_barang' -> required,
        //     'nama_customer' -> required,
        //     'jumlah' -> required|numeric,
        // ]);

        $request->validate([
            'id_barang' => 'required',
            'nama_customer' => 'required',
            'jumlah' => 'required|numeric'
        ]);

        $id = $request->id_barang;
        $barang = Barang::find($id);

        if($barang->stok < $request->jumlah) {
        return redirect('/barang_keluar')->with('error', 'Stok barang tidak memenuhi !!');
    }

        $barang->decrement('stok',$request->jumlah);
        BarangKeluar::create([
            'id_barang' => $request->id_barang,
            'nama_customer' => $request->nama_customer,
            'jumlah' => $request->jumlah,   

        ]);
        return redirect('/barang_keluar')->with('success', 'Barang Keluar Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::all();
        $barang_keluar = BarangKeluar::find($id);
        return view('home.barang_keluar.show', compact('barang_keluar', 'barang'));
    }


    /**
     * Show the form for editing the specified resource.
     */

    public function printReceipt(string $id)
    {
        // $data = Penjualan::with(['kasir', 'detailPenjualan.menu'])
        //     ->where('nobon', $id)
        //     ->first();

        // return view('barangkeluar.cetak', compact('data'));
$barang_keluar = BarangKeluar::with(['barang'])
->where($id);
$barang = Barang::all();
$barang_keluar = BarangKeluar::find($id);
        return view('home.barang_keluar.receipt', compact('barang_keluar'));
    }
    
    public function edit(string $id)
    {
        //   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
