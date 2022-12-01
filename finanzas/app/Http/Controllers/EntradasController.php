<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Entradas;

class EntradasController extends Controller
{
    /* Store es para guardar las entradas */

    public function store(Request $request){

        $request->validate([
            'idUsuario'=>'required',
            'fechaEntrada'=>'required',
            'fechaRegistro'=>'required',
            'factura'=>'null',


        ]);

        $entrada = new Entradas;
        $entrada->idUsuario = $request->idUsuario;
        $entrada->fechaEntrada = $request->fechaEntrada;
        $entrada->fechaRegistro = $request->fechaRegistro;
        $entrada->factura = $request-> factura;
        $entrada->save();

        return redirect()->route('entrada')->with('success', 'Entrada agregada correctamente');
    }

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

    public function destroy($id){

        $entrada = Entradas::all($id);

        return view('entrada.index', ['success' => 'registro eliminado exitosamente']);

    }

    


}
