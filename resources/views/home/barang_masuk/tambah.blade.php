@extends('layouts.master')
@section('title', 'barang_masuk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Barang Masuk</h3>
                            <a class="btn btn-warning" href="/barang_masuk">Kembali</a>
                            <div class="card-body">
                            <form action="{{ route('barang_masuk.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Barang</label>
                                    <select name="id_barang" id="" class="form-control">
                                        <option value="">Pilih Barang</option>
                                        @foreach($barang as $barang)
                                        <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Supplier</label>
                                    <select name="id_supplier" id="" class="form-control">
                                        <option value="">Pilih Barang</option>
                                        @foreach($supplier as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_supplier')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
</div>
<form action="" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="jumlah"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
</div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection