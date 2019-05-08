<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotasController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Carga una vista GET
     */
    public function notas(){
        return view('notas');
    }

    /**
     * @return Nota[]|\Illuminate\Database\Eloquent\Collection
     * Devuelve un json con las notas cargadas (GET)
     */
    public function mostrarNotas(){
        return Nota::all();
    }

    /**
     * @param Request $request
     * @return Nota[]|\Illuminate\Database\Eloquent\Collection
     * Recibe una nota, la guarda y devuelve las notas actualizadas (POST)
     */
    public function guardarNota(Request $request){
        $nota = new Nota();
        $nota->descripcion = $request->input('descripcion');
        $nota->save();
        return $this->mostrarNotas();
    }

    /**
     * @param Request $request
     * @return Nota[]|\Illuminate\Database\Eloquent\Collection
     * Recibe una nota, la elimina y devuelve las notas actualizadas (POst)
     */
    public function eliminarNota(Request $request){
        $nota = Nota::find($request->input('id'));
        $nota->delete();
        return $this->mostrarNotas();
    }
}
