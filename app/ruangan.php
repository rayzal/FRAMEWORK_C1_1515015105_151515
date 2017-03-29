<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan'; 
  protected $fillable = ['title']; 

    // model ruangan berelasi dengan model jadwal_matakuliah dengan relasi One to Many.
    //Untuk menentukan hubungan ini, dibuat membuat satu fungsi jadwal_matakuliah() pada model ruangan 
    // Fungsi jadwal_matakuliah() harus mempunyai nilai return dari fungsi hasMany() yang ada pada class eloquent
    // pendefinisian ulang pada foreign key (ruangan_id) dengan memasukkan argument tambahan ke fungsi hasMany.
    // Logikanya : " setiap ruangan bisa digunakan oleh banyak jadwal matakuliah "

   public function jadwal_matakuliah(){
       	return $this->hasMany(jadwal_matakuliah::class,'ruangan_id');
       }
}
