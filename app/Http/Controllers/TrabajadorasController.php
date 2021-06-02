<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Flash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;


class TrabajadorasController extends Controller
{
    public function index(Request $request){
        $tfs = $this->showTFS();
        return view('front/trabajadoras/index')->with('tfs', $tfs);
    }

    public function store(Request $request){
        if($request->hasFile('img')){
            $validator = Validator::make($request->all(),[
                "img"    => "dimensions:max_width=250,max_height=250,'image','mimes:jpg,png,jpeg,gif'",

            ]);
            if($validator->fails()){
                return Redirect::back()->withInput()->withErrors($validator);
            }else{
                    $file=$request->file('img');
                    $name = time().$file->getClientOriginalName();
                    $file->move(public_path().'/imagenUser/',$name);

                    $inputs=$request->all();
                    $inputs['password']=bcrypt($inputs['password']);
                    $inputs['img']=$name;
                    User::create($inputs);
                    return redirect(route('trabajadoras.index'));
                }
            }
            $inputs=$request->all();
            $inputs['password']=bcrypt($inputs['password']);
            //$inputs['img']=$name;
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
        $trabajadora = DB::table('users')
        ->select()
        ->where('dni', $request->dni)
        ->get();
        $id=$trabajadora[0]->id;
            $users=DB::table('usuarios')
        ->select('nombre','apellidos')
        ->where('tf_asignada', $id)
        ->orWhere('tf_asignada2',  $id)
        ->get();
         $data = [ 'trabajadora' => $trabajadora, 'users' => $users];
        return $data;

    }


    public function employeeByZone(Request $request){
        $trabajadora = DB::table('users')
            ->select()
            ->where('zona', $request->zonas)
            ->get();
        $data = [ 'trabajadora' => $trabajadora];
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
    protected function edit(){
        $trabajadora = DB::table('users')
        ->select()
        ->where('id', $_GET['id'])
        ->get();
        return  $trabajadora;

    }
    protected function update(Request $request){
        $update=DB::table('users')->where('id', $request->id)->update([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'zona' => $request->zona
        ]);
        return redirect(route('trabajadoras.todas'));
    }

}
