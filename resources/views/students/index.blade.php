<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Students')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Daftar Mahasiswa</h1>
            <a href="/students/create" class="btn btn-primary m-2">Tambah Data</a>
            
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->name}}
                    <a href="/students/{{$student->id}}" class="badge bg-info text-white">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>



</div>

@endsection