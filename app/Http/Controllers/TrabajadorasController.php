<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Flash;


class TrabajadorasController extends Controller
{
    public function index(Request $request){
        $tfs = $this->showTFS();
        return view('front/trabajadoras/index')->with('tfs', $tfs);
    }

    public function store(Request $request){
        $inputs=$request->all();
        $inputs['password']=bcrypt($inputs['password']);

       //dd($inputs);
       //Flash::success('ok');
       //@include('Flash::message') esto en index
        User::create($inputs);

    return redirect(route('trabajadoras.index'));

    }
    protected function showTFS(){
       $tfs = DB::table('users')->where('rol_id', 2)->where('zona', Auth::user()->zona)->get();
       return $tfs;
    }
    protected function showTFusers(Request $request){
        //dd($_GET['id']);
        $users=DB::table('usuarios')->where('tf_asignada', $_GET['id'])->orWhere('tf_asignada2', $_GET['id'])->get();
        return view('front/trabajadoras/show')->with('users', $users);

    }

    //mostrar todas

    public function trabajadorasFiltrar(){
        $zonasname = DB::table('zonas')
            ->select('zonas','id')
            ->get();
        return view('front/trabajadoras/todas_trabajadoras')->with('zonas', $zonasname);
    }


    public function dniBuscar(Request $request){
        $buscardni = DB::table('users')
        ->select()
        ->where('dni', $request->dni)
        ->get();
        $id=$buscardni[0]->id;
        $users=DB::table('usuarios')
        ->select('nombre','apellidos')
        ->where('tf_asignada', $id)
        ->orWhere('tf_asignada2',  $id)
        ->get();
        $data = [ 'buscardni' => $buscardni, 'users' => $users];
        return $data;


    }


    public function zonaBuscar(Request $request){
        $zonas = DB::table('users')
            ->select()
            ->where('zona', $request->zonas)
            ->get();
        for($i=0;$i<count( $zonas);$i++){
            $users=DB::table('usuarios')
                ->join('users', 'users.id', '=','usuarios.tf_asignada')
                    ->select(DB::raw('CONCAT(usuarios.nombre," ",usuarios.apellidos) AS usuario'),'usuarios.tf_asignada','usuarios.tf_asignada2')
                     ->where('users.zona', $request->zonas)
                     ->orWhere('usuarios.tf_asignada', $zonas[$i]->id)
                     ->orWhere('usuarios.tf_asignada', $zonas[$i]->id)
                    ->get();




        }
        $data = [ 'zonas' => $zonas, 'users' => $users];
        return $data;
    }

    protected function delete($id){
        if (DB::table('usuarios')->where('tf_asignada', $id)->exists()) {
            $update=DB::table('usuarios')->where('tf_asignada', $id)->update([
                'tf_asignada' => null
            ]);

        }
        if (DB::table('usuarios')->where('tf_asignada2', $id)->exists()) {
            $update=DB::table('usuarios')->where('tf_asignada2', $id)->update([
                'tf_asignada2' => null
            ]);
        }
        DB::table('users')
                ->where('id', $id)
                ->delete();
            return back()->with('message', 'Eliminado');

    }


}

