<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class PagesController extends Controller
{
    //
    public function inicio(){
        return view('welcome');
    }

    //
    public function intro(){
        return view('intro_vista');
    }

    //
    public function producto(){

        $tablaProductos = Producto::all();

        return view('producto_vista', compact('tablaProductos'));
    }
}
