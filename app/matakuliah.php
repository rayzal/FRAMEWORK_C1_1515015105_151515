<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah'; 
   protected $fillable = ['title','keterangan']; 


    // model matakuliah berelasi dengan model dosen_matakuliah dengan relasi One to Many.
    // Untuk menentukan hubungan ini, dibuat membuat satu fungsi dosen_matakuliah() pada model matakuliah 
    // Fungsi dosen_matakuliah() harus mempunyai nilai return dari fungsi hasMany() yang ada pada class eloquent
    // pendefinisian ulang pada foreign key (matakuliah_id) dengan memasukkan argument tambahan ke fungsi hasMany.
       //  Logikanya : " setiap matakuliah bisa diajarkan oleh banyak dosen matakuliah "
   public function dosen_matakuliah(){
       	return $this->hasMany(dosen_matakuliah::class,'matakuliah_id');
       }


}
