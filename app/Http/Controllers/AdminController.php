<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function home(){
        return view('admin/home');
    }
    public function siswa(){
        return view('admin/siswa');
    }
    public function guru(){
        return view('admin/guru');
    }
    public function kelas(){
        return view('admin/kelas');
    }
    public function jadwal(){
        return view('admin/jadwal');
    }
    public function presensisiswa(){
        return view('admin/presensisiswa');
    }
    public function presensiguru(){
        return view('admin/presensiguru');
    }
}
