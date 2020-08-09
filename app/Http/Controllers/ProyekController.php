<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = Proyek::all();
        return view ('proyek.index',compact('proyek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyek = new Proyek;
        $proyek->nama = $request->nama;
        $proyek->deskripsi = $request->deskripsi;
        $proyek->tanggalMulai = $request->tglMulai;
        $proyek->tanggalSelesai = $request->tglSelesai;
        $proyek->save();

        return redirect('proyek')->with('status','Proyek telah berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyek = Proyek::find($id);
        return view('proyek.detail',compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyek = Proyek::find($id);
        return view('proyek.edit',compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proyek = Proyek::find($id);
        $proyek->nama = $request->nama;
        $proyek->deskripsi = $request->deskripsi;
        $proyek->tanggalMulai = $request->tglMulai;
        $proyek->tanggalSelesai = $request->tglSelesai;
        $proyek->save();

        return redirect('proyek')->with('status','Proyek telah berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyek = Proyek::find($id);
        $proyek->delete();

        return redirect('proyek')->with('status','Proyek :  '.$proyek->nama.'  telah dihapus!');
    }

    public function daftarStaff()
    {
        return view ('proyek.daftarStaff');
    }
}
