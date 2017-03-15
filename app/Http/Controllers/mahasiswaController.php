<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswaController extends Controller
{
     public function awal(){
    	return "Hello dari mahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();
    	$mahasiswa ->nama = 'Muhammad Rizal';
    	$mahasiswa ->nim = '1515015105';
    	$mahasiswa ->alamat = 'Jl. Rumbia';
    	$mahasiswa ->pengguna_id = '3';
    	$mahasiswa ->save();
    	return "data dengan nama($mahasiswa->nama) telah disimpan";
	}
}
