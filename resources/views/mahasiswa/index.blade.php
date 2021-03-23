<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Daftar Mahasiswa')

@section('container')

<div class="container">
    <container class="container text-center">
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Program Studi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($mahasiswa as $mhs)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$mhs->nama}}</td>
                            <td>{{$mhs->nim}}</td>
                            <td>{{$mhs->email}}</td>
                            <td>{{$mhs->jurusan}}</td>
                            <td>

                                <a href="" type="button" class="btn btn-primary editbtn" data-bs-toggle="modal" data-bs-target="">Edit</a>

                                <a href="" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus data ini?')"> Hapus </a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>
        </div>
    </container>
</div>

@endsection