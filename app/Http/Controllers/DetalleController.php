<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index(){
        return view('detalle.index');
    }
    public function create(){
        return view('detalle.create');
    }
    public function show($detalle){
        return view('detalle.show', ['detalle' => $detalle]);
    }
}
