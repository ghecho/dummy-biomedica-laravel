<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Equipo;

class EquiposController extends Controller
{
    public function showAllEquipos(Request $request) {
		$equipos = Equipo::orderBy('id')->get();
	    return view('equipos')->with('equipos', $equipos);
	}

	public function showNewEquipoForm(Request $request) {
		return view('equipo-new');
	}

	public function registerNewEquipo(Request $request) {
		$name = $request->input('name');
		$marca = $request->input('marca');
		$modelo = $request->input('modelo');
		$newEquipo = new Equipo;
		$newEquipo->name = $name;
		$newEquipo->marca = $marca;
		$newEquipo->modelo = $modelo;
		$newEquipo->save();
	    return redirect('/equipos');
	}

	public function deleteEquipo(Request $request, $idEquipo) {
		$equipo = Equipo::find($idEquipo);
		$equipo->delete();
	    return redirect('/equipos');
	}

	public function showEquipoDetails(Request $request, $idEquipo) {
		$equipo = Equipo::find($idEquipo);
    	return view('equipo-detail')->with('equipo', $equipo);
	}

	public function editEquipoDetails(Request $request, $idEquipo) {
		$equipo = Equipo::find($idEquipo);
		$name = $request->input('name');
		$marca = $request->input('marca');
		$modelo = $request->input('modelo');
		$equipo->name = $name;
		$equipo->marca = $marca;
		$equipo->modelo = $modelo;
		$equipo->save();
	    return redirect('/equipos');
	}
}
