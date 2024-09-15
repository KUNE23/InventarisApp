@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if(session('success'))
                            <div class="alert alert-info">
                                {{ session('success') }}
                        </div>
                        @endif
                        <h3>Halaman Data Barang</h3>
                        <a class="btn btn-primary" href="/barang/tambah">Tambah</a>
</div>
                         <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col"><center>Gambar</center></th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Nama Jenis</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($barang as $barang)
                                                <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-center">
                                                    <img src="{{  asset('/storage/public/products/' . $barang->gambar) }}"
                                                    class="rounded" style="width: 150px">
                                                </td>
                                              
                                                <td>{{ $barang->nama_barang }}</td>
                                                <td>{{ $barang->Jenis->nama_jenis }}</td>
                                                <td>{{ number_format($barang->harga_beli) }}</td>
                                                <td>{{ number_format($barang->harga_jual) }}</td>
                                                <td>{{ $barang->stok }}</td>
                                                <td><a class="btn btn-warning" href="/barang/{{ $barang->id }}/show">Edit</a>
                                                <br>
                                                    <a class="btn btn-danger" href="/barang/{{ $barang->id }}/delete"
                                                    onclick="konfirmasihapus(event, '{{$barang->id}}')">Delete</a></td>
                                                    </tr>
                                            @endforeach
                        </div>
                    </div>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function konfirmasihapus(event, id) {
        event.preventDefault(); // Prevent the default link click behavior
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                }).then(() => {
                    // Navigate to the delete URL after the confirmation
                    window.location.href = '/barang/delete/' + id;
                });
            }
        });
    }
</script>
@endsection