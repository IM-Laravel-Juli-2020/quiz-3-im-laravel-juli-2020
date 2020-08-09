<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function image(){
        return view('gambar');
    }

    public function index(){
        $items=\DB::table('karyawan')->get();
        return view('layouts/items/karyawan',compact('items'));
    }
}
