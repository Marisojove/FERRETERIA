<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(){
        return view('compra.index');

    }
    public function create(){
        return view('compra.create');

    }
    public function show($compra){
        return view('compra.show',['compra'=>$compra]);

    }
}
