<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IncidenciasController;
use Illuminate\Support\Facades\Redirect;

class UsuariosController extends Controller
{
    //comprobamos el rol de la trabajadora: si es coordinadora devuleve los usuarios por zona, si es
    //tf devuleve los usuarios que tengan esa tf asignada
    public function index(){

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

    protected function show(Request $request,$user_id){
        if( Auth::user()->rol_id == 1 || Auth::user()->rol_id == 3 ){
            $usuario = DB::table('usuarios')
                        ->join('users', 'users.id', '=','usuarios.tf_asignada')
                        ->select('usuarios.*', DB::raw('users.nombre AS tfn, users.apellidos AS tfa'))
                        ->where('usuarios.id', $user_id)
                        ->get();
            $incidencias = DB::table('incidencias')
                            ->join('users', 'users.id', '=', 'incidencias.id_tf')
                            ->join('usuarios', 'usuarios.id', '=', 'incidencias.id_usuario')
                            ->select( 'estado', 'descripcion', 'fecha', DB::raw('incidencias.id AS idi'))
                            ->where('usuarios.id', $user_id)
                            ->get();
            $evolutivos = DB::table('evolutivos')
                            ->join('usuarios', 'id_usuario', '=', 'usuarios.id')
                            ->join('users', 'id_tf', '=', 'users.id')
                            ->select('evolutivos.id', 'evolutivos.fecha_creacion', 'evolutivos.descripcion', 'users.nombre')
                            ->where('id_usuario', $user_id)
                            ->limit(4)
                            ->get();
            $tf=DB::table('users')->select('id', 'nombre', 'apellidos')->where('zona', Auth::user()->zona)->where('rol_id', 2)->get();

            return view('front/usuario')->with('usuario', $usuario)->with('incidencias', $incidencias)->with('evolutivos', $evolutivos)->with('tfs', $tf);
        }else{
            $usuario = DB::table('usuarios')
                        ->select('nombre', 'apellidos', 'direccion', 'detalle', 'tareas' )
                        ->where('id', $user_id)->get();

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
        $update=DB::table('usuarios')->where('id', $request->id)->update([
            'direccion' => $request->direccion,
            'telefono' => $request->telf,
            'persona_contacto' => $request->contacto,
            'detalle' => $request->detalle,
            'tareas' => $request->tareas,
            'tf_asignada' => $request->tf,
            'horas_asignadas' => $request->horas
        ]);
        if($update == true){
           return back()->with('message', 'Modificado');
        }
        return back()->withError('Error', 'Error');
    }

    protected function delete($id){
        $delete=DB::table('usuarios')->where('id', $id)->delete();
    }
}
