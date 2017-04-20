<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class jadwal_matakuliahRequest extends Request
{
    //
    public function authorize()
    {
    	return true;
    }

    public function rules()
    {
    	$validasi= [
    	'mahasiswa_id'=>'required',
    	'ruangan_id'=>'required',
    	'dosen_matakuliah_id'=>'required',

    	];
    	
    	return $validasi;
    }
}
