<?php

namespace App\Http\Controllers;
use app\Models\Salidas;

use Illuminate\Http\Request;

class SalidasController extends Controller
{
    /* Store es para guardar las salidas */

    public function store(Request $request){

        $request->validate([
            'idUsuario'=>'required',
            'fechaSalida'=>'required',
            'fechaRegistro'=>'required',
            'factura'=>'null',


        ]);

        $entrega = new Entrega;
        $entrega->idUsuario = $request->idUsuario;
        $entrega->fechaSalida = $request->fechaSalida;
        $entrega->fechaRegistro = $request->fechaRegistro;
        $entrega->factura = $request-> factura;
        $entrega->save();

        return redirect()->route('salida')->with('success', 'Salida agregada correctamente');

    }

}
