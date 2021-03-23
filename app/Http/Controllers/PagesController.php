<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function aboutme(){
        return view('aboutme', ['nama' => 'Wahyu Syarif']);
    }
}
