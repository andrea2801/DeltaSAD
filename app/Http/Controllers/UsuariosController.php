<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    //comprobamos el rol de la trabajadora: si es coordinadora devuleve los usuarios por zona, si es
    //tf devuleve los usuarios que tengan esa tf asignada
    public function index(Request $request){

        if(Auth::user()->rol_id == 1){

            $usuarios = $this->showByZone(Auth::user()->zona);

            return view('front/usuarios', compact('usuarios', $usuarios));
        }

        $usuarios= $this->showByTf();
        return view('front/usuarios', compact('usuarios', $usuarios));
    }

    protected function create(Request $request){

        $insert = DB::table('usuarios')->insert(
            array(
                'nombre' => $request->name,
                'apellidos' => $request->subname,
                'direccion' => $request->direction,
                'telefono' => $request->telf,
                'dni' => $request->dni,
                'persona_contacto' => $request->contact,
                'detalle' => $request->detail,
                'tareas' => $request->chores,
                'horas_asignadas'=> $request->hours,
                'archivos_adjuntos'=> $request->file,
                'tf_asignada'=> $request->tf1,
                'tf_asignada2' => $request->tf2,
                'zona' => $request->zone
            )
        );
        return redirect(); //redireccionar a la pag donde estabas estaria bien un popup conforme se ha creadp
    }

    protected function show(Request $request, $user_id){
        if( Auth::user()->rol_id == 1 || Auth::user()->rol_id == 3 ){
            $usuario = DB::table('usuarios')->where('id', $user_id)->get();
            $incidencias = DB::table('incidencias')
                            ->join('users', 'users.id', '=', 'incidencias.id_tf')
                            ->join('usuarios', 'usuarios.id', '=', 'incidencias.id_usuario')
                            ->select()
                            ->where('usuarios.id', $user_id)
                            ->get();
            return view('front/usuario', compact('usuario', $usuario), compact('incidencias', $incidencias));
        }else{
            $usuario = DB::table('usuarios')->where('id', $user_id)->get();

            return view('front/usuario', compact('usuario', $usuario));
        }
    }

    protected function showByZone($zone){
        //mostrar usuarios x zona en pantalla principal de usuarios
        $users=DB::table('usuarios')->where('zona', $zone)->get();
        return $users;
    }

    protected function showByTf(){
        //mostrar usuarios x zona en pantalla principal de usuarios
        $users=DB::table('usuarios')->select('id', 'nombre', 'apellidos', 'direccion', 'telefono', 'detalle', 'tareas')->where('tf_asignada',Auth::id())->orWhere('tf_asignada2', Auth::id())->orderBy('apellidos', 'desc')->get();
        return $users;
    }

    protected function update(Request $request){

    }

    protected function delete(Request $request){

    }
}
