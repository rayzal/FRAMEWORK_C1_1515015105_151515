<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
   protected $table = 'pengguna'; 
    protected $fillable = ['username','password']; 

    // model pengguna berelasi dengan model dosen dengan relasi One to One.
    // Untuk menentukan hubungan ini, dibuat membuat satu fungsi dosen() pada model Pengguna 
    //  Fungsi dosen() harus mempunyai nilai return dari fungsi hasOne() yang ada pada class eloquent
    //  Logikanya : " setiap dosen pasti hanya memiliki satu pengguna_id "
    public function dosen(){
    	return $this->hasOne(dosen::class,'pengguna_id');
    	
    }


    // model pengguna berelasi dengan model mahasiswa dengan relasi One to One.
    // Untuk menentukan hubungan ini, dibuat membuat satu fungsi mahasiswa() pada model Pengguna 
    //  Fungsi mahasiswa() harus mempunyai nilai return dari fungsi hasOne() yang ada pada class eloquent
    //  Logikanya : " setiap mahasiswa pasti hanya memiliki satu pengguna_id "
    public function mahasiswa(){
    	return $this->hasOne(mahasiswa::class,'pengguna_id');
    	
    }


}
