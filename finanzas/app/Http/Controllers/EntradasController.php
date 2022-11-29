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

        $entrega = new Entrega;
        $entrega->idUsuario = $request->idUsuario;
        $entrega->fechaEntrada = $request->fechaEntrada;
        $entrega->fechaRegistro = $request->fechaRegistro;
        $entrega->factura = $request-> factura;
        $entrega->save();

        return redirect()->route('entrada')->with('success', 'Entrada agregada correctamente');
    }

    public function index(){

        $entrega = Entrega::all();

        return view('entregas.index', ['entregas' => $entrega]);

    }

    public function show($id){

        $entrega = Entrega::find($id);

        return view('entregas.show', ['entregas' => $entrega]);

    }

    public function update(Request $request, $id){

        $entrega = Entrega::find($id);
        $entrega->idUsuario = $request->idUsuario;
        $entrega->fechaEntrada = $request->fechaEntrada;
        $entrega->fechaRegistro = $request->fechaRegistro;
        $entrega->factura = $request-> factura;
        $entrega->save();

        return view('entregas.index', ['success' => 'actualizado exitosamente']);

    }

    public function destroy($id){

        $entrega = Entrega::all($id);

        return view('entregas.index', ['success' => 'registro eliminado exitosamente']);

    }

    


}
