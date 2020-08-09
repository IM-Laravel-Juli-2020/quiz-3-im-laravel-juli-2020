<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function index() {
        $managers = DB::table('managers')->get();

        return $managers;
    }

    public function show($id) {
        $manager = DB::table('managers')->where('id', $id)->get();

        return $manager;
    }

    public function store(Request $request) {
        $input = $request->all();
        DB::table('managers')->insert($input);
    }

    public function update(Request $request, $id) {
        DB::table('managers')
            ->where('id', $id)
            ->update($request->all());
    }   

    public function destroy($id) {
        DB::table('managers')
            ->where('id', $id)
            ->delete($id);
    }
}
