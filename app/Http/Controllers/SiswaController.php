<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    
    public function home(){
        return view('siswa/home');
    }
    public function profil(){
        return view('siswa/profil');
    }
    public function kelas(){
        return view('siswa/kelas');
    }
    public function jadwal(){
        return view('siswa/jadwal');
    }
    public function pembayaran(){
        return view('siswa/pembayaran');
    }
    public function presensi(){
        return view('siswa/presensi');
    }
}
