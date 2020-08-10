<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProyeksController extends Controller
{
    public function create() {
        $manager = DB::table('managers')->get();

        return view('contents.create', compact('manager'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|max:255',
            'start' => 'required',
            'deadline' => 'required',
            'status' => 'required',
            'manager' => 'required'
        ]);

        $query = DB::table('proyeks')->insert([
            "nama_proyek" => $request['name'],
            "deskripsi_proyek" => $request['desc'],
            "tanggal_mulai" => $request['start'],
            "tanggal_deadline" => $request['deadline'],
            "status" => $request['status'],
            "manager_id" => $request['manager']
        ]);

        return redirect('/items')->with('success', 'Proyek berhasil ditambahkan!');
    }

    public function index() {
        $proyeks = DB::table('proyeks')->get();

        return view('contents.read', compact('proyeks'));
    }

    public function show($id) {
        $proyek = DB::table('proyeks')->where('proyek_id', $id)->first();

        return view('contents.show', compact('proyek'));
    }

    public function destroy($id) {
        $proyek = DB::table('proyeks')->where('proyek_id', $id)->delete();

        return redirect('/items')->with('success', 'Proyek berhasil dihapus!');
    }
}
