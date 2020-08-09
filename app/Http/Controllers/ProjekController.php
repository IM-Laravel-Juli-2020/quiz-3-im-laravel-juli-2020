<?php

namespace App\Http\Controllers;

use App\Projek;
use Illuminate\Http\Request;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projek = Projek::latest()->paginate(5);

        return view('projek.index', compact('projek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'mulai' => 'required',
            'deadline' => 'required',
            'staus' => 'required',
            'manager_id' => 'required',
        ]);

        Projek::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'mulai' => $request->mulai,
            'deadline' => $request->deadline,
            'staus' => $request->staus,
            'manager_id' => $request->manager_id,
        ]);

        return redirect()->route('projek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function show(Projek $projek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function edit(Projek $projek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projek $projek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projek $projek)
    {
        //
    }
}
