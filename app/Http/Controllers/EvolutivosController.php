<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class EvolutivosController extends Controller
{

    protected function create(Request $request){
        DB::table('evolutivos')->insert([
            'fecha_creacion' => Carbon::now(),
            'descripcion' => $request->evolucion,
            'id_usuario' => $request->usuario,
            'id_tf' => $request->tf
        ]);
        return back()->withInput();
    }
    protected function view(Request $request){
        $evolutivos=DB::table('evolutivos')
                ->where('id', $request->id)
                ->get();
        return $evolutivos;
    }


}
