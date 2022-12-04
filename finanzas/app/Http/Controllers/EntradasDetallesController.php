<?php

namespace App\Http\Controllers;

use app\Models\Entradas;
use Illuminate\Http\Request;

class EntradasDetallesController extends Controller
{
    

    public function index(){

        $entrada = Entradas::all();

        return view('entradaDetalle.index', ['entrada' => $entrada]);

    }

    public function show($id){

        $entrada = Entradas::find($id);

        return view('entradaDetalle.show', ['entrada' => $entrada]);

    }

    public function findByDate(){

        return \DB::table('empleados')->select('idRol')->where('idEmpleado', '=', $id)->get();
    
    }    

}
