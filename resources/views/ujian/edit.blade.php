<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Ubah data')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Form Ubah data</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/ujian/{{$ujian->id}}">
                    @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama MK</label>
                            <input type="text" name="nama_mk" value="{{($ujian->nama_mk)}}" class="form-control @error('nama_mk') is-invalid @enderror" placeholder="Masukkan Mata Kuliah">
                            @error('nama_mk')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="dosen">dosen</label>
                            <input type=" text" name="dosen" value="{{$ujian->dosen}}" class="form-control @error('dosen') is-invalid @enderror" placeholder="Masukkan nama dosen">
                            @error('dosen')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jumlah_soal">Jumlah Soal</label>
                            <input type="number" name="jumlah_soal" value="{{$ujian->jumlah_soal}}" class="form-control" placeholder="Masukkan Jumlah Soal">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" value="{{$ujian->keterangan}}" class="form-control" placeholder="Masukkan keterangan">
                        </div>

                        <a href="/ujian" class="btn btn-secondary">kembali</a>
                        <button type="submit" class="btn btn-primary" name="submit">Ubah data</button>
                    </form>
                </div>
            </div>






        </div>
    </div>



</div>

@endsection