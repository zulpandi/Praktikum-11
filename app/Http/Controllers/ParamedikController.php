<?php

namespace App\Http\Controllers;

use App\Models\paramedik;
use Illuminate\Http\Request;

class ParamedikController extends Controller
{
    public function index(){
        $list_paramedik = paramedik::all();
        return view('paramedik.index',['list_paramedik'=>$list_paramedik]);
    }
}
