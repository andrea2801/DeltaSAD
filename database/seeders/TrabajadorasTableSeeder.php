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
    }
}
