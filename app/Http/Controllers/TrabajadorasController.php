<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IncidenciasController;
use App\Models\User;


class TrabajadorasController extends Controller
{
    public function index(Request $request){

        return view('front/trabajadoras/index');

    }

    public function store(Request $request){

        $inputs=$request->all();
        $inputs['password']=bcrypt($inputs['password']);

       // dd($inputs);

        //Flas::success('ok');
        User::create($inputs);


    return redirect(route('trabajadoras.index'));


    }


}
