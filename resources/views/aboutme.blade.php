<?php

use PhpParser\Node\Stmt\Echo_;
?>
@extends('layout.main')

@section('title','Aboutme')

@section('container')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 pb-5">Find Out <span>More</span><br><span>About Me</span></h1>
    </div>
</div>
<!-- end of jumbotron -->

<!-- container -->
<div class="container">
    <!-- info panel -->
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="card-body text-center">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Wahyu Syarif Hidayatullah
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        29 April 2001
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Agama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Islam
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Laki-Laki
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        wahyush04@gmail.com
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">No. Telp</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        083129679506
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Whatsapp</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        083129679506
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Pringgajurang, Kec. Montong gading, Kab. Lombok Timur
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Pendidikan</i>
                        </h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">2006 - 2012</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                SDN 7 LOYOK
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">2012 - 2015</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                SMPN 1 MONTONG GADING
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">2015 - 2018</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                SMAN 1 SIKUR
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">2018 - Now</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                UNIVERSITAS BUMIGORA
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Skill</i>
                        </h6>
                        <small>Web Design</small>
                        <div class="progress mb-3" style="height: 7px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Java</small>
                        <div class="progress mb-3" style="height: 7px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Flutter</small>
                        <div class="progress mb-3" style="height: 7px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>PHP</small>
                        <div class="progress mb-3" style="height: 7px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Javascript</small>
                        <div class="progress mb-3" style="height: 7px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="social-icons text-center mb-5 mt-4">
    <h2>Follow me</h2>
    <a href="https://web.facebook.com/wahyush04/" class="fb"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/WahyuSyarif14" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="https://www.instagram.com/wahyush04/" class="insta"><i class="fa fa-instagram"></i></a>
    <a href="https://www.youtube.com/channel/UCccaRl06jZqOzZzEdPzSJXg?view_as=subscriber" class="yt"><i class="fa fa-youtube"></i></a>
    <a href="https://www.linkedin.com/in/wahyu-syarif-232a5b115/" class="in"><i class="fa fa-linkedin"></i></a>
    <a href="https://www.google.com/" class="google"><i class="fa fa-google"></i></a>
</div>

@endsection