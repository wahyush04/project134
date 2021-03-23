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
                Form Input data user
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                        <th>Program Studi</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Wahyu Syarif</td>
                        <td>Wahyush04@gmail.com</td>
                        <td>083129679506</td>
                        <td>S1 ILMU KOMPUTER</td>
                        <td>Lombok Timur</td>
                        <td>

                            <a href="" type="button" class="btn btn-primary editbtn" data-bs-toggle="modal" data-bs-target="">Edit</a>

                            <a href="" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus data ini?')"> Hapus </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </container>
</div>

@endsection