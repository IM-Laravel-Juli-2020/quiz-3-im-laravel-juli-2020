<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
{
    Public Function create() {
        return view('proyek.create');
    }
    
    Public Function store(Request $req) {
        
        $req->validate([
            'nama' => 'required',
            'isi' => 'required',            
        ]);
    
        $query = DB::table('proyek')->insert([
                'nama' => $req['judul'], 
                 'isi' => $req['isi'],
                 'manager_id' => $req['manajer_id']
                 ]);
        
        return redirect('/proyek')->with('sukses','Proyek berhasil dibuat !');
    }

    
    public function index () {
        $list = DB::table('proyek')->get();        
        return view('proyek.index',compact('list'));
    }

    public function show ($id) {
        $list = DB::table('proyek')->where('id',$id)->first();        
        return view('proyek.show',compact('list'));
    }

    public function edit ($id) {
        $list = DB::table('proyek')->where('id',$id)->first();        
        return view('proyek.edit',compact('list'));
    }

    public function update ($id,Request $req) {

        $list = DB::table('proyek')
                    ->where('id',$id)
                    ->update([
                        'nama' => $req['nama'],
                        'deskripsi' => $req['deskripsi']
                    ]);        

        return redirect('/proyek')->with('sukses','Proyek berhasil diupdate !');
    }

    public function destroy($id) {

        $list = DB::table('proyek')->where('id',$id)->delete();
        return redirect('/proyek')->with('sukses','Proyek berhasil dihapus !');
    }

    Public Function daftarstaf() {
        return view('proyek.daftarstaf');      
    }
 
    
    Public Function storestaf(Request $req) {
        
        $req->validate([
            'proyek_id' => 'required',
            'staf_id' => 'required',            
        ]);
    
        $query = DB::table('proyek')->insert([
                'proyek_id' => $req['[proyek_id]'], 
                 'staf_id' => $req['staf_id'],
                 ]);
        
        return redirect('/proyek')->with('sukses','Data Staf berhasil dibuat !');
    }

}

