@extends('layouts.master')
@section('tittle', 'Jenis')
@section('content')

<h1><i class="fa fa-times" aria-hidden="true"></i></h1>
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Halaman Edit Data Jenis </h3>
                    </div>
                        <div class="card-body">
                        <form action="/jenis/{{ $jenis->id }}/update" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama jenis</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_jenis"
                                        id=""
                                        value="{{ $jenis->nama_jenis }}"
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