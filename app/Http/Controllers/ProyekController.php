<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyekController extends Controller
{
    public function index()
    {
        $proyek = DB::table('proyek')->orderBy('id')->get();
        return view('proyek.index', compact('proyek'));
    }

    public function create()
    {
        $manajer = DB::table('karyawan')
            ->join('manajer', 'karyawan.id', '=', 'manajer.karyawan_id')
            ->select('karyawan.nama', 'manajer.id')
            ->get();
        // dd($manajer);
        return view('proyek.create', compact('manajer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required',
        ]);

        $status = $request->status == 1 ? true : false;
        // dd($status);

        DB::table('proyek')->insert([
            'nama_proyek' => $request->nama_proyek,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_deadline' => $request->tanggal_deadline,
            'status' => $status,
            'manajer_id' => $request->manajer_id
        ]);

        return redirect('/proyek')->with('success', 'Proyek berhasil dibuat');
    }

    public function show($id)
    {
        $detail = DB::table('proyek')->where('id', $id)->first();

        return view('proyek.show', compact('detail'));
    }

    public function edit($id)
    {
        $data = DB::table('proyek')->where('id', $id)->first();
        return view('proyek.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required',
        ]);
        $status = $request->status == 1 ? true : false;

        DB::table('proyek')
            ->where('id', $id)
            ->update([
                'nama_proyek' => $request->nama_proyek,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_deadline' => $request->tanggal_deadline,
                'status' => $status,
                'manajer_id' => $request->manajer_id
            ]);

        return redirect('/proyek')->with('success', 'Proyek berhasil diubah');
    }

    public function destroy($id)
    {
        DB::table('proyek')->where('id', $id)->delete();
        return redirect('/proyek')->with('success', 'Proyek telah dihapus');
    }
}
