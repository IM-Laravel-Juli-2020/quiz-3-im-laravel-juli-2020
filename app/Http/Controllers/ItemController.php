<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(){
        return view ('items.create');
    }
//menerima data dari form:request
    public function store(request $request){
        //dd($request->all());
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        //query untuk mengecek lalu masuukkan sbg aray asosiatif
        $query = DB::table('posts')->insert([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);
        return redirect('/posts')->with('success','post berhasi disimpan');
        
        }
        public function index(){
            $posts = DB::table('posts')->get(); //select *post
            //dd($posts);
            return view ('posts.index', compact('posts'));//hasi looping
    } 

    public function show($id){
        $posts = DB::table('posts')->where('id', $id)->first();
        //dd($posts);
        return view ('posts.show', compact('posts'));//hasi looping
} 

public function edit($id){
    $posts = DB::table('posts')->where('id', $id)->first();
    //dd($posts);
    return view ('posts.edit', compact('posts'));//hasi looping
} 

public function update($id, request $request){
    $query = DB::table('posts')
    ->where('id', $id)
    ->update([
        'title' => $request['title'],
        'body' => $request['body']
    ]);
    //dd($posts);
    return redirect ('/posts')->with('success', 'berhasil update post');
} 

public function destroy($id){
    $query = DB::table('posts')
    ->where('id', $id)
    ->delete();
    //dd($posts);
    return redirect ('/posts')->with('success', 'post berhasil dihapus');
} 

}
