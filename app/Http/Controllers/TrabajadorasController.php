<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Validated;


class TrabajadorasController extends Controller
{
    public function index(Request $request){
        $tfs = $this->showTFS();
        return view('front/trabajadoras/index')->with('tfs', $tfs);
    }

    public function store(Request $request){

        $v = request()->validate([

                'dni' => 'required|unique:users,dni',
                'telefono' => 'numeric|digits:9',
                'email' => 'email|unique:users,email',

        ], [ 'dni.unique' => 'Dni duplicado',
             'telefono.digits' => 'Máximo 9 digitos',
             'telefono.numeric' => 'Solo números',
             'email.unique' => 'Email ya existe',





        ]);


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
            //return back()->with('succes','Trabajadora dada de alta correctamente.');
            return redirect(route('trabajadoras.index'));

    }

    protected function showTFS(){
       $tfs = DB::table('users')->where('rol_id', 2)->where('zona', Auth::user()->zona)->get();
       return $tfs;
    }

    protected function showTFusers(Request $request){
        $users=DB::table('usuarios')->select('id', 'nombre', 'apellidos', 'direccion', 'telefono', 'detalle', 'tareas')->where('tf_asignada', $_GET['id'])->orWhere('tf_asignada2', $_GET['id'])->get();
        if($users == false){
            Session::flash('error', 'error al obtener datos');
        }
        return view('front/trabajadoras/show')->with('users', $users);
    }

    //mostrar todas

    public function trabajadorasFiltrar(){

        return view('front/trabajadoras/todas_trabajadoras');
    }


    public function dniBuscar(Request $request){
        $trabajadora = DB::table('users')
            ->where('dni', $request->dni)
            ->get();

        if(count($trabajadora) == 0){
            $data = [ 'trabajadora' => null];
        } else {
            $id=$trabajadora[0]->id;
            $users=DB::table('usuarios')
                ->select('nombre','apellidos')
                ->where('tf_asignada', $id)
                ->orWhere('tf_asignada2',  $id)
                ->get();
            $data = [ 'trabajadora' => $trabajadora, 'users' => $users];
        }

        return $data;
    }


    public function employeeByRole(Request $request){
        $trabajadora = DB::table('users')
            ->select()
            ->where('rol_id', $request->id)
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
        DB::table('users')->where('id', $request->id)->update([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'zona' => $request->zona
        ]);
        return redirect(route('trabajadoras.todas'));
    }

}
