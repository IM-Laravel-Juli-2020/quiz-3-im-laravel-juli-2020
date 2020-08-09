<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
class ItemController extends Controller
{
    public function create(){
        // echo "awawaw";
        return view('create');
    }

    public function store(Request $request){
        $validatedReq = $request->validate([
            "title" => 'required|max:255',
            "body" => 'required|max: 65535'
        ]);

        $query = DB::table('proyek')->insert([
            "nama" => $request['title'],
            "deskripsi" => $request['body'],
            "tanggal_deadline" => $request['deadline'],
            "status" => 0
        ]);

        return redirect('/proyek');
    }

    public function create_staff($id){
        $data = DB::table('proyek')
        -> where('id', $id)
        -> get()
        ->first();


        // dd($data);
        return view('create_staff', compact('data'));
    }

    public function store_staff($id, Request $request){
        dd($id, $request);
    }

    public function index(){
        $datas = DB::table('proyek')->get();
        return view('index', compact('datas'));
    }

    public function show($id){
        
    }

    public function edit($id){
        
    }
    
    public function update(Request $request, $id){
        
    }

    public function destroy($id){
        
    }
}
