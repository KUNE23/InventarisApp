@extends('layouts.master')
@section('title', 'BarangKeluar')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3>Halaman Detail Barang Keluar</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img src="{{ asset('/storage/public/products/' . $barang_keluar->Barang->gambar) }}" class="rounded" style="width: 200px">
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
                        <div><h1>{{ $barang_keluar->Barang->nama_barang }}</h1></div>
                        <hr>
                        <div> {{ $barang_keluar->nama_customer }}</div>
                        <div>{{ $barang_keluar->created_at }}</div>
                        <hr>
                        <div>Jumlah : {{ $barang_keluar->jumlah }}</div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <a class="btn btn-warning" href="/barang_keluar">Kembali</a>
                  <td><a class="btn btn-dark" href="/barang_keluar/receipt/{{ $barang_keluar->id }}">Struk</a></td>
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

