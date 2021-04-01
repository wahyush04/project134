<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Aboutme')

@section('container')

<div class="container">
    <div class="row custom-section d-flex align-items-center">
        <div class="col-lg-4">
            <h2>Wahyu Syarif</h2>
            <h3>1810530134</h3>
            <p>Fullstack Developer | Newbie</p>
            <a href="/aboutme">More About Me</a>
        </div>
        <div class="col-lg-8 pl-5 pt-5">
            <img src="/img/programmer.png" alt="Team process banner">
        </div>
    </div>
</div>

@endsection