<?php

namespace App\Http\Controllers;

use app\Models\Entradas;
use Illuminate\Http\Request;

class EntradasDetallesController extends Controller
{
    

    public function index(){

        $entrada = Entradas::all();

        return view('entrada.index', ['entrada' => $entrada]);

    }

    public function show($id){

        $entrada = Entradas::find($id);

        return view('entrada.show', ['entrada' => $entrada]);

    }

    public function update(Request $request, $id){

        $entrada = Entradas::find($id);
        $entrada->idUsuario = $request->idUsuario;
        $entrada->fechaEntrada = $request->fechaEntrada;
        $entrada->fechaRegistro = $request->fechaRegistro;
        $entrada->factura = $request-> factura;
        $entrada->save();

        return view('entrada.index', ['success' => 'actualizado exitosamente']);

    }

}
