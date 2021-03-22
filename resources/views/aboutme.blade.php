<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Aboutme')

@section('container')

<container class="container text-center">
    <h1>Hello, {{$nama}}!</h1>
</container>

@endsection