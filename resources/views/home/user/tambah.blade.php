@extends('layouts.master')
@section('tittle', 'User')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data User</h3>
                            <a class="btn btn-warning" href="/user">Kembali</a>
                            <div class="card-body">
                            <form action="/user/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                            
                                <form action="" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="password"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                                </div>
                                <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="level" class="form-control @error('level') is-invalid @enderror" required>
                <option value="">Pilih Role</option>
                <option value="Admin">Admin</option>
                <option value="Karyawan">Karyawan</option>
            </select>
                                    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
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