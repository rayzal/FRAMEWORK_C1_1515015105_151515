<?php

namespace App\Http\Controllers;

use App\dosen;

class RelationshipRebornController extends Controller
{
    public function ujiHas()
    {
    	return dosen::has('dosen_matakuliah')->get();
    }
    public function ujiDoesntHave()
    {
    	return dosen::doesntHave('dosen_matakuliah')->get();
    }
   
   

}
