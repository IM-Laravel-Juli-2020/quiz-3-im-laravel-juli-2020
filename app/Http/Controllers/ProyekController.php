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

    public function tambahStaff($id){
        $proyek =DB::table('proyek')
            ->select()
            ->where('id', $id)
            ->first();
        
        $staff = DB::table('staff')
            ->join('karyawan', 'staff.karyawan_id', '=', 'karyawan.id')
            ->select('staff.*', 'karyawan.nama')
            ->get();

        return view('tambahStaff',compact('proyek'), compact('staff'));
    }

    public function daftarStaff($id){
        $data = explode('-',$id); 
        
        $query = DB::table('staff_has_proyek')->insert([
            'proyek_id' => $data[1],
            'staff_id' => $data[0]
        ]);
        
        return view('welcome');
    }
}
