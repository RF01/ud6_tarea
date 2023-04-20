<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cesta;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
   

    //
    public function intro(){
        $bebidasRecomendadas = [
            'Cerveza IPA',
            'Vino tinto Malbec',
            'Whisky escocés',
            'Gin & Tonic',
            'Margarita',
        ];


        return view('intro_vista', compact('bebidasRecomendadas'));
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

        $tablaCestaTotal =DB::table('cestas')->sum(DB::raw('pvp * cantidad'));



        return view('cesta_vista', compact('tablaCesta','tablaCestaTotal'));
    }

    public function guardarCesta(Request $request){
        $cesta = new Cesta;
        
        //  if ($request->input('tipo_producto')!=null)
        // {
        //     $cesta->tipo_producto = implode(',', $request->input('tipo_producto'));
        // } 
        $cesta->tipo_producto= $request->input('tipo_producto');
        $cesta->nombre = $request->input('nombre');
        // $cesta->descripcion = $request->input('descripcion');
        $cesta->pvp = $request->input('pvp');
        $cesta->cantidad = $request->input('cantidad');
        $cesta->id_producto = $request->input('id_producto');
       
     
        $cesta->save();

        $tablaProductos = Producto::all();
        $tablaProductosTotal = Producto::all()->count();
        // $tablaProductos = DB::table('productos')->where('id','like',1)->get();
        return view('producto_vista', compact('tablaProductos','tablaProductosTotal'));
    }

    public function anadirCantidad(Request $request){
        $id = $request->input('id');
        $cantidad = $request->input('cantidad');
        // $pvp = $request->input('pvp');

        

        DB::table('cestas')->where('id',$id)->update(['cantidad'=>$cantidad]);
        
       $tablaCestaCant  = DB::table('cestas')->where('id',$id)->value('cantidad');
        

        if($tablaCestaCant < 1){

            DB::table('cestas')->where('id',$id)->delete();
        }
        $tablaCesta = Cesta::all();

        // $tablaCestaTotal = Cesta::all()->sum($pvp * $cantidad);
        // $tablapublicada =  DB::table('alumnos')
        //         ->join('profesors', 'profesors.id', '=', 'alumnos.id_profesor')
        //         ->select('alumnos.*', 'profesors.nombre as profeNombre')
        //         ->where('oficial',1)
        //         ->get();

        // $tablaCestaTotal = DB::table('cestas')->select( 'pvp','cantidad')->get();
        $tablaCestaPvp = DB::table('cestas')->select( 'pvp')->get();
       
    //    (float)$tablaCestaTotal = (float) $tablaCestaPvp *  (float)$tablaCestaCant ;
    //    $tablaCestaTotal =  $tablaCestaPvp + $tablaCestaCant ;

    // (double)$subtotal = (double) DB::table('cestas')->sum(DB::raw('pvp * cantidad'));
    $tablaCestaTotal =DB::table('cestas')->sum(DB::raw('pvp * cantidad'));



    return view('cesta_vista', compact('tablaCesta','tablaCestaTotal'));

    }

    public function buscar(Request $request)
    {
        // $nombre = $request->input('nombre');
        // $productos = Producto::where('nombre', 'LIKE', '%' . $nombre . '%')->get();
        // return view('buscar_vista', ['productos' => $productos]);

        if ($request->has('nombre')) {
            $nombre = $request->input('nombre');
            $pvp = $request->input('pvp');
            $productos = Producto::where('nombre', 'like', '%'.$nombre.'%')->get();
            return view('buscar_vista', compact('productos', 'nombre','pvp'));
            
        } else {
            return view('buscar_vista');
        }
    }
}