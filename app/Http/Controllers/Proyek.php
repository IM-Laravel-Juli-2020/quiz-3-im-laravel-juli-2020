<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Proyek extends Controller
{
    public function index()
    {
    	$proyek = DB::table('proyek')->get();

		return view('index', compact('proyek'));
    }

    public function create()
	{
		return view('create');
	}

	public function store(Request $request)
	{
		$request->validate([
			'nama' => 'required', 
			'deskripsi' => 'required',
			'mulai' => 'required',
			'deadline' => 'required',
		]);
		$query = DB::table('proyek')->insert([
			'nama' => $request['nama'],
			'deskripsi' => $request['deskripsi'],
			'tanggal_mulai' => $request['mulai'],
			'tanggal_deadline' => $request['deadline'],
			'status' => 0,
		]);

		return redirect('/proyek')->with('success', 'Data Berhasil Disimpan!');
	}

	public function show($id)
	{	
		$query = DB::table('proyek')->where('id', $id)->first();
		// dd($query);
		return view('show', compact('query'));
	}

	public function edit($id)
	{	
		$query = DB::table('proyek')->where('id', $id)->first();
		// dd($query);
		return view('edit', compact('query'));
	}

	public function update($id, Request $request)
	{
		$request->validate([
			'nama' => 'required', 
			'deskripsi' => 'required',
			'mulai' => 'required',
			'deadline' => 'required',
		]);
		$query = DB::table('proyek')
					->where('id', $id)
					->update([
						'nama' => $request['nama'],
						'deskripsi' => $request['deskripsi'],
						'tanggal_mulai' => $request['mulai'],
						'tanggal_deadline' => $request['deadline'],
						'status' => 0,
					]);

		return redirect('/proyek')->with('success', 'Update Data Berhasil!');
	}

	public function destroy($id)
	{
		$query = DB::table('proyek')->where('id', $id)->delete();

		return redirect('/proyek')->with('success', 'Delete Data Berhasil');
	}
}
