<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
    function index()
    {
        return view('index');
    }

    function proyek()
    {
        return view('proyek_list');
    }
}
