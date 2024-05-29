<?php

namespace App\Http\Controllers;

use App\Models\unit_kerja;
use Illuminate\Http\Request;

class unit_kerjaController extends Controller
{
    public function index(){
        $list_unit_kerja = unit_kerja::all();
        return view('unit_kerja.index',['list_unit_kerja'=>$list_unit_kerja]);
    }
}
