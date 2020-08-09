<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProyekController extends Controller
{
    public function index()
    {
        $proyeks = DB::table('proyeks')->get();
        return view('proyeks.index', compact('proyeks'));
    }
    public function create()
    {
        return view('proyeks.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_proyek' => 'required|unique:proyeks|max:255',
            'deskripsi_proyek' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_deadline' => 'required',
            'status' => 'required'
        ]);
        DB::table('proyeks')->insert([
            'nama_proyek' => $request['nama_proyek'],
            'deskripsi_proyek' => $request['deskripsi_proyek'],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_deadline' => $request['tanggal_deadline'],
            'status' => $request['status']
        ]);
        return redirect('/proyek')->with('success', 'Proyek berhasil disimpan');
    }
    public function show($id)
    {
        $proyek = DB::table('proyeks')->where('id',$id)->first();
        return view('proyeks.show', compact('proyek'));
    }
    public function edit($id)
    {
        $proyek = DB::table('proyeks')->where('id',$id)->first();
        return view('proyeks.edit', compact('proyek'));
    }
    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama_proyek' => 'required|max:255',
            'deskripsi_proyek' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_deadline' => 'required',
            'status' => 'required'
        ]);
        $pertanyaan = DB::table('proyeks')->where('id',$id)->update([
            'nama_proyek' => $request['nama_proyek'],
            'deskripsi_proyek' => $request['deskripsi_proyek'],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_deadline' => $request['tanggal_deadline'],
            'status' => $request['status']
        ]);
        return redirect('/proyek')->with('success', 'Proyek berhasil diupdate');
    }
    public function destroy($id)
    {
        $proyek = DB::table('proyeks')->where('id',$id)->delete();
        return redirect('/proyek')->with('success', 'Proyek berhasil dihapus');
    }
    public function daftarstaff($id)
    {
        $karyawans = DB::table('karyawan')->where('status', 'staff')->get();
        return view('proyeks.daftar_staff', compact('karyawans'));
    }
    public function storestaff($id, Request $request)
    {
        
    }
}
