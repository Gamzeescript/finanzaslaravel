<?php

namespace App\Http\Controllers;

use app\Models\Salidas;
use Illuminate\Http\Request;

class SalidasDetallesController extends Controller
{
     /* Store es para guardar las salidas */

     public function store(Request $request){

        $request->validate([
            'idUsuario'=>'required',
            'fechaSalida'=>'required',
            'fechaRegistro'=>'required',
            'factura'=>'null',


        ]);

        $salida = new Salidas;
        $salida->idUsuario = $request->idUsuario;
        $salida->fechaSalida = $request->fechaSalida;
        $salida->fechaRegistro = $request->fechaRegistro;
        $salida->factura = $request-> factura;
        $salida->save();

        return redirect()->route('salida')->with('success', 'Salida agregada correctamente');

    }

    public function index(){

        $salida = Salidas::all();

        return view('salida.index', ['salida' => $salida]);

    }

    public function show($id){

        $salida = Salidas::find($id);

        return view('salida.show', ['salida' => $salida]);

    }

    public function update(Request $request, $id){

        $salida = Salidas::find($id);
        $salida->idUsuario = $request->idUsuario;
        $salida->fechaEntrada = $request->fechaEntrada;
        $salida->fechaRegistro = $request->fechaRegistro;
        $salida->factura = $request-> factura;
        $salida->save();

        return view('salida.index', ['success' => 'actualizado exitosamente']);

    }

    public function destroy($id){

        $salida = Salidas::all($id);

        return view('salida.index', ['success' => 'registro eliminado exitosamente']);

    }
}
