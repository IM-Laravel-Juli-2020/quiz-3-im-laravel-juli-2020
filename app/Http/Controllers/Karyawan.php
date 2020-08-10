<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Karyawan extends Controller
{
    public function index()
    {
    	$karyawan = DB::table('karyawan')->get();

		return view('indexkaryawan', compact('karyawan'));
    }

    public function show($id)
	{	
		$query = DB::table('karyawan')->where('id', $id)->first();

		if($query->jabatan == 'staff')
		{
			$query1 = DB::table('staff_proyek')->where('karyawan_id', $id)->get();
		}
		if($query->jabatan == 'manager')
		{
			$query1 = DB::table('manager_proyek')->where('karyawan_id', $id)->get();
		}
		// dd($query);
		return view('showkaryawan', compact('query1'));
	}
}
