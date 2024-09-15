@extends('layouts.master')
@section('title', 'BarangMasuk')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3>Halaman Detail Barang Masuk</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img src="{{ asset('/storage/public/products/' . $barang_masuk->Barang->gambar) }}" class="rounded" style="width: 200px">
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- /.col-6 -->
                
                <div class="col-6">
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <div><h1>{{ $barang_masuk->Barang->nama_barang }}</h1></div>
                        <hr>
                        <div>Rp. {{ number_format($barang_masuk->Barang->harga_jual) }}</div>
                        <div>{{ $barang_masuk->created_at }}</div>
                        <hr>
                        <div>Jumlah : {{ $barang_masuk->jumlah }}</div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <a class="btn btn-warning" href="/barang_masuk">Kembali</a>
                  <td><a class="btn btn-dark" href="/barang_masuk/receipt/{{ $barang_masuk->id }}">Struk</a></td>
                </div>
                <!-- /.col-6 -->
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

