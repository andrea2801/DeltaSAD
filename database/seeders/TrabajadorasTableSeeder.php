<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trabajadora;
use Illuminate\Support\Facades\Hash;

class TrabajadorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //coordinadoras
        $employee = new Trabajadora();
        $employee->nombre= 'Desirée';
        $employee->apellidos= 'Barragán Urionabarranechea';
        $employee->telefono= 659632145;
        $employee->dni= '47569874P';
        $employee->password= Hash::make('desiree123');
        $employee->email= 'desi@gmail.com';
        $employee->img= null;
        $employee->zona= 1;
        $employee->rol_id= 1;
        $employee->save();

        $employee = new Trabajadora();
        $employee->nombre= 'Raquel';
        $employee->apellidos= 'Gutierrez Antequera';
        $employee->telefono= 678987456;
        $employee->dni= '45786597V';
        $employee->password= Hash::make('raquel123');
        $employee->email= 'raqui@gmail.com';
        $employee->img= null;
        $employee->zona= 2;
        $employee->rol_id= 1;
        $employee->save();

        $employee = new Trabajadora();
        $employee->nombre= 'Sonia';
        $employee->apellidos= 'Perea Pelea';
        $employee->telefono= 666777888;
        $employee->dni= '45129863Y';
        $employee->password= Hash::make('sonia123');
        $employee->email= 'sonia@gmail.com';
        $employee->img= null;
        $employee->zona= 3;
        $employee->rol_id= 1;
        $employee->save();

        //tf zona 1
        $employee = new Trabajadora();
        $employee->nombre= 'Nathalie';
        $employee->apellidos= 'Quiroz Neira';
        $employee->telefono= 654789123;
        $employee->dni= '45130958N';
        $employee->password= Hash::make('nathalie123');
        $employee->email= 'nath@gmail.com';
        $employee->img= null;
        $employee->zona= 1;
        $employee->rol_id= 2;
        $employee->save();

        $employee = new Trabajadora();
        $employee->nombre= 'Andrea';
        $employee->apellidos= 'Alonso Salguero';
        $employee->telefono= 666333999;
        $employee->dni= '45318798A';
        $employee->password= Hash::make('andrea123');
        $employee->email= 'otaku@gmail.com';
        $employee->img= null;
        $employee->zona= 1;
        $employee->rol_id= 2;
        $employee->save();

        //tf zona 2
        $employee = new Trabajadora();
        $employee->nombre= 'Sandra';
        $employee->apellidos= 'Gonzalez Marin';
        $employee->telefono= 607068413;
        $employee->dni= '45126056X';
        $employee->password= Hash::make('sandra123');
        $employee->email= 'sandri@gmail.com';
        $employee->img= null;
        $employee->zona= 2;
        $employee->rol_id= 2;
        $employee->save();

        $employee = new Trabajadora();
        $employee->nombre= 'Aitor';
        $employee->apellidos= 'Tilla Ruiz';
        $employee->telefono= 666111198;
        $employee->dni= '45386633A';
        $employee->password= Hash::make('aitor123');
        $employee->email= 'torti@gmail.com';
        $employee->img= null;
        $employee->zona= 2;
        $employee->rol_id= 2;
        $employee->save();

        //tf zona 3
        $employee = new Trabajadora();
        $employee->nombre= 'Fran';
        $employee->apellidos= 'Chesko Virgolini';
        $employee->telefono= 612345987;
        $employee->dni= '45786534F';
        $employee->password= Hash::make('fran123');
        $employee->email= 'fans@gmail.com';
        $employee->img= null;
        $employee->zona= 3;
        $employee->rol_id= 2;
        $employee->save();

        $employee = new Trabajadora();
        $employee->nombre= 'Elena';
        $employee->apellidos= 'Nillo Del Bosque';
        $employee->telefono= 654123987;
        $employee->dni= '45123498E';
        $employee->password= Hash::make('elena123');
        $employee->email= 'delbosque@gmail.com';
        $employee->img= null;
        $employee->zona= 3;
        $employee->rol_id= 2;
        $employee->save();

        //ts
        $employee = new Trabajadora();
        $employee->nombre= 'Pepa';
        $employee->apellidos= 'Pig Cerdo';
        $employee->telefono= 661331999;
        $employee->dni= '45987654P';
        $employee->password= Hash::make('pepa123');
        $employee->email= 'pepapig@gmail.com';
        $employee->img= null;
        $employee->zona= null;
        $employee->rol_id= 3;
        $employee->save();
    }
}
