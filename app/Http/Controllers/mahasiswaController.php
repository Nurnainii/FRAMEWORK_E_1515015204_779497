<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function awal()
    {
    	return "mahasiswa Mengambil Matakuliah Framework";
    }
     public function tambah()
     {
     	return $this->simpan();
     }
      public function simpan()
      {
      	$mahasiswa = new mahasiswa();
      	$mahasiswa ->nama = 'Jungkook';
      	$mahasiswa ->nim = '1515015204';
      	$mahasiswa ->pengguna_id = '1';
      	$mahasiswa -> save();

      	return "data dengan nama {$mahasiswa->nama} telah disimpan";
      }
}
