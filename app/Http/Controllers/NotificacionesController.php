<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class NotificacionesController extends Controller
{
    public function index(){

    }

    protected function viewNew(){
        $notification=DB::table('notificaciones')->where('estado', 'nueva')->where('destinatario', Auth::user()->id)->orderBy('prioridad')->get();
        return $notification;
    }

    protected function viewPending(){
        $notification=DB::table('notificaciones')->where('estado', 'pendiente')->where('destinatario', Auth::user()->id)->orderBy('prioridad')->get();
        return $notification;
    }

    protected function viewFinished(){
        $notification=DB::table('notificaciones')->where('estado', 'cerrada')->where('destinatario', Auth::user()->id)->get();
        return $notification;
    }

    protected function viewSent(){
        $notification=DB::table('notificaciones')->join('users', 'users.id', '=', 'destinatario')->where('creador', Auth::user()->id)
                            ->select('notificaciones.*', DB::raw('users.nombre AS nombre, users.apellidos AS apellidos'))->get();
        $users=DB::table('users')->select('id', 'nombre', 'apellidos')->get();
        return view('front/enviadas')->with('notificaciones', $notification)->with('users', $users);
    }

    protected function create(Request $request){
        $isCreated=DB::table('notificaciones')->insert(
            array(
                'asunto' => $request->asunto,
                'detalle' => $request->detalle,
                'creador' => Auth::user()->id,
                'destinatario' => $request->para,
                'estado' => 'nueva',
                'prioridad' => $request->prioridad,
                'fecha' => Carbon::now()
            )
        );
        if($isCreated == true){
            return back()->with('message', 'Modificado');
        }
        return back()->with('message', 'Error al enviar notificacion');
    }

}
