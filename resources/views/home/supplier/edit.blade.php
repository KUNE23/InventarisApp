@extends('layouts.master')
@section('tittle', 'Supplier')
@section('content')

<h1><i class="fa fa-times" aria-hidden="true"></i></h1>
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Halaman Edit Data Supplier </h3>
                    </div>
                        <div class="card-body">
                        <form action="/supplier/{{ $supplier->id }}/update" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Supplier</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_supplier"
                                        id=""
                                        value="{{ $supplier->nama_supplier }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
</div>
<div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        id=""
                                        value="{{ $supplier->alamat }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
</div>
<div class="mb-3">
                                <label for="" class="form-label">No Telp</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        id=""
                                        value="{{ $supplier->no_telp }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
</div>
                                    <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</div>

@endsection