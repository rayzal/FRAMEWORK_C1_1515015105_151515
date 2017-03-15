<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosenController extends Controller
{
    
    public function awal(){
    	return "Hello dari dosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new dosen();
    	$dosen ->nama = 'dr.Jon doe,M.Kom,MIPD';
    	$dosen ->nip = '19961010 15150105';
    	$dosen ->alamat = 'Jl. Biawan';
    	$dosen ->pengguna_id = '1';
    	$dosen ->save();
    	return "data dengan nama($dosen->nama) telah disimpan";
    }
}
