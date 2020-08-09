<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class ProyekController extends Controller
{
    public function index(){
        $data = DB::table('proyek')->select()->get();
        return view('proyeks',compact('data'));
    }

    public function create(){
        return view('create');
    }
}
