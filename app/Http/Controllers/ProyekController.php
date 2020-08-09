<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('proyek')->get();
        return view('content' , ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('proyek')->insert([
            "nama_proyek"=>$request["nama"],
            "deskripsi_proyek"=>$request["deskripsi"],
            "status"=>$request["status"]
        ]);
        return redirect('/proyek');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('proyek')->where('id',$id)->first();
        return view('formtampil' , compact('data'));
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
        $data = DB::table('proyek')
        ->where('id' , $id)
        ->update([
            'nama_proyek'=>$request['nama'],
            'deskripsi_proyek'=>$request['deskripsi'],
            'status'=>$request['status']
        ]);
        return redirect('/proyek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('proyek')->where('id' , $id)->delete();
        return redirect('/')->with('success' , 'Pertanyaan berhasil di Hapus');
    }

    public function daftar($id)
    {
        return view('formdaftar');
    }

    public function simpan(Request $request)
    {
        DB::table('karyawan')->insert([
            "nama"=>$request["karyawan"]
        ]);
        return redirect('/proyek');
    }
}
