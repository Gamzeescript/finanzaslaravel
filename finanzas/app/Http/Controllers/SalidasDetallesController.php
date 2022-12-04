<?php

namespace App\Http\Controllers;

use app\Models\Salidas;
use Illuminate\Http\Request;

class SalidasDetallesController extends Controller
{

    public function index(){

        $salida = Salidas::all();

        return view('salidaDetalle.index', ['salida' => $salida]);

    }

    public function show($id){

        $salida = Salidas::find($id);

        return view('salidaDetalle.show', ['salida' => $salida]);

    }

}
