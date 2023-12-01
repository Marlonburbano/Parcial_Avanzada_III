<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Are;

class AreaController extends Controller
{
    public function index(){
        $area = DB::table('areaconocimiento')->get(); // select * from facultad
        return view('areas.listado', ['are'=>$area]);
    }
}
