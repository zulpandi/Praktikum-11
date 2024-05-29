<?php

namespace App\Http\Controllers;

use App\Models\kelurahan;
use Illuminate\Http\Request;

class kelurahanController extends Controller
{
    public function index(){
        $list_kelurahan = kelurahan::all();
        return view('kelurahan.index',['list_kelurahan'=>$list_kelurahan]);
    }
}
