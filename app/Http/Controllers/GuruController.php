<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    
    public function home(){
        return view('guru/home');
    }
    public function profil(){
        return view('guru/profil');
    }
    public function kelas(){
        return view('guru/kelas');
    }
    public function jadwal(){
        return view('guru/jadwal');
    }
    public function presensi(){
        return view('guru/presensi');
    }
}
