<?php

namespace App\Http\Controllers;


use App\Models\BarangMasuk;
use App\Models\Supplier;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_masuk  = BarangMasuk::all();
        return view('home.barang_masuk.index', compact('barang_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        // $barang_masuk = BarangMasuk::all();
        return view('home.barang_masuk.tambah', compact('barang', 'supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
    
    public function store(Request $request)
    {
        // validate form
        $request->validate([
            'id_barang' => 'required',
            'id_supplier' => 'required',
            'jumlah' => 'required|numeric'
        ]);
    
            // dump data yang dikirim melalui form
    // dd($request->all());

    $id =$request->id_barang;
    $barang = Barang::find($id);
    $barang->increment('stok', $request->jumlah);

        BarangMasuk::create([
        'id_barang' => $request->id_barang,
            'id_supplier' => $request->id_supplier,
            'jumlah' => $request->jumlah
        ]);

        // redirect to index
        return redirect('/barang_masuk')->with('success', 'Barang berhasil ditambahkan.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        $barang_masuk = BarangMasuk::find($id);
        return view('home.barang_masuk.show', compact('barang_masuk', 'barang', 'supplier'));
    }

    public function printReceipt(string $id)
    {
        // $data = Penjualan::with(['kasir', 'detailPenjualan.menu'])
        //     ->where('nobon', $id)
        //     ->first();

        // return view('barangkeluar.cetak', compact('data'));
$barang_masuk = BarangMasuk::with(['barang', 'supplier'])
->where($id);
$barang = Barang::all();
$barang_masuk = BarangMasuk::find($id);
        return view('home.barang_masuk.receipt', compact('barang_masuk'));
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
