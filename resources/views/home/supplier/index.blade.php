@extends('layouts.master')
@section('tittle', 'Supplier')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Supplier</h3>
                            <a class="btn btn-primary" href="/supplier/tambah">Tambah</a>
                            </div>
                            <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-stripped" ID="datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">No Telp</th>
                                                    <th scope="col">Action</th>
</tr>
</thead>
<tbody>
    @foreach($supplier as $supplier)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $supplier->nama_supplier }}</td>
                    <td>{{ $supplier->alamat }}</td>
                    <td>{{ $supplier->no_telp }}</td>
                    <td><a class="btn btn-warning" href="/supplier/{{ $supplier->id }}/show">Edit</a>
                        <a class="btn btn-danger" href="/supplier/{{ $supplier->id }}/delete"
                        name="archive" type="submit" id="hapus">Delete</a></td>
                            </tr>
                            @endforeach 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</table>
    </section>
</div>

@endsection