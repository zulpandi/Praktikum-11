<?php

namespace App\Http\Controllers;

use App\Models\periksa;
use Illuminate\Http\Request;

class periksaController extends Controller
{
    public function index(){
        $list_periksa = periksa::all();
        return view('periksa.index',['list_periksa'=>$list_periksa]);
    }
}
