<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProyekController extends Controller
{
    //
    public function index(){
        $proyek = DB::table('proyek')->get();
        return view('proyek.show', compact('proyek'));
    }

    public function create(){
        $manager = DB::table('karyawan')->where('jabatan','=','manager')->get();
        return view('proyek.create', compact('manager'));
    }
}
