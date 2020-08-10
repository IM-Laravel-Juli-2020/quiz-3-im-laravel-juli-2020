<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProyekController extends Controller
{
    public function index()
    {
        $proyek=DB::table('proyek')->get();
        $nomor=1;

        return view('proyek.index',compact('proyek','nomor'));
    }

    public function create()
    {
        
    }
}
