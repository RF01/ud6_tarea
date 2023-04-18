<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cesta;
use Illuminate\Support\Facades\DB;

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
        $tablaProductosTotal = Producto::all()->count();
        // $tablaProductos = DB::table('productos')->where('id','like',1)->get();
        return view('producto_vista', compact('tablaProductos','tablaProductosTotal'));
    }

    public function guardar(Request $request){
        $producto = new Producto;
        $producto->tipo_producto = $request->input('tipo_producto');
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->pvp = $request->input('pvp');
        $producto->save();

        $tablaProductos = Producto::all();
        $tablaProductosTotal = Producto::all()->count();
        // $tablaProductos = DB::table('productos')->where('id','like',1)->get();
        return view('producto_vista', compact('tablaProductos','tablaProductosTotal'));
    }

    public function cesta(){
        $tablaCesta = Cesta::all();
        $tablaCestaTotal = Cesta::all()->count();
        // $tablaProductos = DB::table('productos')->where('id','like',1)->get();
        return view('cesta_vista', compact('tablaCesta','tablaCestaTotal'));
    }

    public function anadirCantidad(Request $request){
        $id = $request->input('id');
        $cantidad = $request->input('cantidad');

        DB::table('cestas')->where('id',$id)->update(['cantidad'=>$cantidad]);
        $tablaCesta = Cesta::all();
        $tablaCestaTotal = Cesta::all()->count();
        return view('cesta_vista', compact('tablaCesta','tablaCestaTotal'));

    }
}