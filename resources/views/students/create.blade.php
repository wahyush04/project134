<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Tambah Data')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Form Tambah Data Mahasiswa</h1>

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/students">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type=" text" name="nim" value="" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan nim">
                            @error('nim')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="semail">Email</label>
                            <input type="email" name="email" value="" class="form-control" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" value="" class="form-control" placeholder="Masukkan Jurusan">
                        </div>
                        <!-- <div class="form-group">
                            <label for="sprodi">Program Studi</label>
                            <select name="sprodi" class="form-control"">
                                <option value=""></option>
                                <option value=" S1-ILKOM">S1-ILKOM</option>
                                <option value="S1-DKV">S1-DKV</option>
                                <option value="S1-TI">S1-TI</option>
                                <option value="D3-Sistem Informasi">D3-Sistem Informasi</option>
                                <option value="D3-RPL">D3-RPL</option>
                                <option value="S1-HUKUM">S1-HUKUM</option>
                                <option value="S1-MANAGEMENT">S1-MANAGEMENT</option>
                                <option value="S1-AKUNTANSI">S1-AKUNTANSI</option>
                            </select>
                        </div> -->

                        <button type="reset" class="btn btn-danger" name="breset">KOSONGKAN</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    </form>
                </div>
            </div>






        </div>
    </div>



</div>

@endsection