<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lib;

class LibroController extends Controller
{
    public function index(){
        $libros = DB::table('libro')
                    ->join('areaconocimiento','area', '=', 'idArea' )->get();
                    // select * from programa join facultad on facultad= codfacultad;
        return view('libros.listado', ['lib'=> $libros]);
}
}
