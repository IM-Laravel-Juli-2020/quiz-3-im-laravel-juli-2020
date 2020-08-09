<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function index() {
        $projects = DB::table('projects')->get();

        return view('projects', compact('projects'));
    }

    public function show($id) {
        $employee = DB::table('projects')->where('id', $id)->get();

        return $employee;
    }

    public function store(Request $request) {
        $input = $request->all();
        DB::table('projects')->insert($input);
    }

    public function update(Request $request, $id) {
        DB::table('projects')
            ->where('id', $id)
            ->update($request->all());
    }   

    public function destroy($id) {
        DB::table('projects')
            ->where('id', $id)
            ->delete($id);
    }
}
