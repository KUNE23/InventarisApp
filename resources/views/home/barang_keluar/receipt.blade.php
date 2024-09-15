
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
    <style>
        .kotak {
            border: 1px solid black;
            padding: 10px;
            width: 380px;
        }
</style>
<body onload="window.print();">  
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-body">
              <div class="kotak">
    <table border="0" width="350">   
        <tr>    
          <center>
            <div><h1>Inventory</h1></div>
      </center>
      </tr>
      <tr>
      <td colspan="2">ID Barang : {{ $barang_keluar->id }}<br><hr></td>
      <td colspan="2">Customer: {{ $barang_keluar->nama_customer }}<br><hr></td>
      </tr>
      <tr>
        <td colspan="2"> Nama Barang : {{ $barang_keluar->Barang->nama_barang }}<br><hr></td>
        <td colspan="2"> Jumlah :{{ $barang_keluar->jumlah }}<br><hr></td>
      </tr>
      <tr>
        <td colspan="2">Harga : Rp. {{ number_format($barang_keluar->Barang->harga_jual) }}<br><hr></td>
      </tr>
      </tr>
      <tr>
        <center>
        <td colspan="2">Waktu : {{$barang_keluar->created_at}}</td>
      </center>
      </tr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      </body>
</head>
