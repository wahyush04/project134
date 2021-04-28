<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Ujian')

@section('container')

<div class="container">
    <h1 class="text-center">DATA UJIAN</h1>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    <div class="container text-center">
        <div class="card mt-1">
            <div class="card-header bg-info text-white">
                Data Ujian
            </div>
            <div class="d-flex"><a href="/ujian/create" class="btn btn-primary mt-3 ml-3">Tambah Data</a></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama MK</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Jumlah Soal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($ujians as $ujian)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$ujian->nama_mk}}</td>
                            <td>{{$ujian->dosen}}</td>
                            <td>{{$ujian->jumlah_soal}}</td>
                            <td>{{$ujian->keterangan}}</td>
                            <td>

                                <a href="/ujian/{{$ujian->id}}/edit" class="btn btn-info">Edit</a>

                                <form action="/ujian/{{$ujian->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                                {{-- <a href="" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus data ini?')"> Hapus </a> --}}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>



</div>

@endsection