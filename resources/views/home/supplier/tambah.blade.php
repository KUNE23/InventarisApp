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
                            <h3>Halaman Tambah Data Supplier</h3>
                            <a class="btn btn-warning" href="/supplier">Kembali</a>
                            <div class="card-body">
                            <form action="/supplier/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                            
                                <form action="" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_supplier"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        id=""
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
    </section>
</div>

@endsection