<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacion;

class CotizacionController extends Controller
{
    public function obtenerCotizaciones(){
        return response()->json(Cotizacion::all(), "200");
    }

    public function agregarCotizacion(Request $request){
        $cotizacion = Cotizacion::create($request->all());
        return response($cotizacion, 201);
    }

    public function eliminarCotizacion(Request $request, $id){
        $cotizacion = Cotizacion::find($id);
        if(is_null($cotizacion)){
            return response()->json(["message"=>"Usuario no encontrado"], 404);
        }
        $cotizacion->delete();
        return response("success");
    }
}
