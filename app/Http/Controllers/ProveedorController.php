<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        return view('proveedor.index');
    }
    public function create(){
        return view('proveedor.create');
    }
    public function show($proveedor){
        return view('proveedor.show', ['proveedor' => $proveedor]);
    }
}
