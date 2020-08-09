<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view ('proyek.dataKaryawan',compact('karyawan'));
    }

    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        return view('proyek.detail',compact('karyawan'));
    }
}
