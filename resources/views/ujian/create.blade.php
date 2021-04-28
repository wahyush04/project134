<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Tambah Data')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Form Tambah Data Ujian</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/ujian">
                        @csrf
                        <div class="form-group">
                            <label for="nama_mk">Nama MK</label>
                            <input type="text" name="nama_mk" value="{{old('nama_mk')}}" class="form-control @error('nama_mk') is-invalid @enderror" placeholder="Masukkan Nama MK">
                            @error('nama_mk')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="dosen">Dosen</label>
                            <input type=" text" name="dosen" value="{{old('dosen')}}" class="form-control @error('dosen') is-invalid @enderror" placeholder="Masukkan nama dosen">
                            @error('dosen')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jumlah_soal">Jumlah Soal</label>
                            <input type="number" name="jumlah_soal" value="{{old('jumlah_soal')}}" class="form-control" placeholder="Masukkan Jumlah soal">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" value="{{old('keterangan')}}" class="form-control" placeholder="Masukkan Keterangan">
                        </div>
                        <button type="reset" class="btn btn-danger" name="breset">KOSONGKAN</button>
                        <a href="/ujian" class="btn btn-secondary">kembali</a>
                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    </form>
                </div>
            </div>






        </div>
    </div>



</div>

@endsection