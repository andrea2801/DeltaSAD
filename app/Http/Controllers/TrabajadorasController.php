<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IncidenciasController;
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

    protected function showTFusers($tfId){
        $users=DB::table('usuarios')->where('tf_asignada', $tfId)->orWhere('tf_asignada2', $tfId)->get();
        var_dump($users); die('holi');
        return $users;
    }



    //mostrar todas

    public function trabajadoras_filtrar(){
        return view('front/trabajadoras/todas_trabajadoras');
    }
    public function dnibuscar(Request $request){
        $bucardni = DB::table('users')
        ->select()
        ->where('dni', $request->dni)
        ->get();
        return $bucardni;
    }
}
