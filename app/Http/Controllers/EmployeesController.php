<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index() {
        $employees = DB::table('employees')->get();

        return $employees;
    }

    public function show($id) {
        $employee = DB::table('employees')->where('id', $id)->get();

        return $employee;
    }

    public function store(Request $request) {
        $input = $request->all();
        DB::table('employees')->insert($input);
    }

    public function update(Request $request, $id) {
        DB::table('employees')
            ->where('id', $id)
            ->update($request->all());
    }   

    public function destroy($id) {
        DB::table('employees')
            ->where('id', $id)
            ->delete($id);
    }
}
