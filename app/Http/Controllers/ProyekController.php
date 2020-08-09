<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProyekController extends Controller
{
    private $table = 'proyek';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = DB::table($this->table)->get(); //SELECT * FROM table
        //dd($pertanyaan);
        return view('proyek.index', compact('proyek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required',
            'id_manager' => 'required'
        ]);

        $query = DB::table($this->table)->insert([
            "nama_proyek" => $request["nama"],
            "deskripsi_proyek" => $request["deskripsi"],
            "tanggal_deadline" => $request["deadline"],
            "id_manager" => $request["id_manager"]

        ]);

        return redirect('/proyek')->with('success', 'Proyek Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyek = DB::table($this->table)->where('idProyek', $id)->first(); //SELECT * FROM posts WHERE id
        //dd($post);
        return view('proyek.show', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyek = DB::table($this->table)->where('idProyek', $id)->first(); //SELECT * FROM

        return view('proyek.edit', compact('proyek'));
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
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required',
            'id_manager' => 'required'
        ]);

        $query = DB::table($this->table)
                    ->where('idProyek', $id)
                    ->update([
                        'nama_proyek' => $request['nama'],
                        'deskripsi_proyek' => $request['deskripsi'],
                        'tanggal_deadline' => $request['deadline'],
                        "id_manager" => $request["id_manager"]
                    ]);

        return redirect('/proyek')->with('success', 'Perubahan Proyek Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table($this->table)->where('idProyek', $id)->delete();
        return redirect('/proyek')->with('success', 'Proyek Berhasil dihapus');
    }

    public function showImage()
    {
        return view('proyek.image');
    }

    public function createStaff($id)
    {
        $proyek = DB::table($this->table)->where('idProyek', $id)->first(); //SELECT * FROM
        return view('proyek.insertStaff', compact('proyek'));
    }

    public function storeStaff(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'idProyek' => 'required',
            'idKaryawan' => 'required'
        ]);

        $query = DB::table('penugasan')->insert([
            "idProyek" => $request["idProyek"],
            "idKaryawan" => $request["idKaryawan"]
        ]);

        return redirect('/proyek')->with('success', 'Penugasan Berhasil Disimpan');
    }

    public function showKaryawan()
    {
        $kar = DB::table('karyawan')->get(); //SELECT * FROM table
        return view('proyek.karyawan', compact('kar'));
    }

    public function showDetail($id)
    {
        $kar = DB::table('karyawan')->where('idKaryawan', $id)->first(); //SELECT * FROM posts WHERE id
        //dd($post);
        return view('proyek.showDetail', compact('kar'));
    }
}
