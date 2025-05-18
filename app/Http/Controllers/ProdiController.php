<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        return view('program-studi.index');
    }

    public function manajemen()
    {
        return view('program-studi.manajemen');
    }

    public function akuntansi()
    {
        return view('program-studi.akuntansi');
    }

    public function bisnis()
    {
        return view('program-studi.manajemen-bisnis');
    }
}
