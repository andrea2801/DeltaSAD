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

   /* protected function showTFusers(Request $request){
        //dd($_GET['id']);
        $users=DB::table('usuarios')->where('tf_asignada', $_GET['id'])->orWhere('tf_asignada2', $_GET['id'])->get();
        return view('front/trabajadoras/show')->with('users', $users);

    }*/

    protected function showTFusers(Request $request){
        //dd($_GET['id']);
        $users=DB::table('usuarios')->where('tf_asignada', $request->id)->orWhere('tf_asignada2', $request->id)->get();
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
        $bucardni = DB::table('users')
        ->select()
        ->where('dni', $request->dni)
        ->get();
        return $bucardni;
    }
    public function zonaBuscar(Request $request){

        $zonas = DB::table('users')
            ->select()
            ->where('zona', $request->zonas)
            ->get();
        return $zonas;
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
        if($update == true){
             DB::table('users')
                ->where('id', $id)
                ->delete();
            return back()->with('message', 'Eliminado');
        }
        return back()->withError('Error', 'Error');
    }


}

