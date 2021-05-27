<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsuariosController;
use Carbon\Carbon;

class IncidenciasController extends Controller
{
    protected function create(Request $request){
        DB::table('incidencias')->insert([
            'fecha' => Carbon::now(),
            'descripcion' => $request->descripcion,
            'id_usuario' => $request->usuario,
            'id_tf' => $request->tf
        ]);
        return back()->withInput();
    }

    protected function closeState($id){
        $result = DB::table('incidencias')->where('id', $id)->update(['estado'=>0]);
        if( $result == true){
            return back()->withInput();
        }
        return back()->with('message', 'Error al cerrar incidencia');
    }

    protected function delete($id){
        $result = DB::table('incidencias')->where('id', $id)->delete();
        if( $result == true){
            return back()->withInput();
        }
        return back()->with('message', 'Error al eliminar incidencia');
    }
}
