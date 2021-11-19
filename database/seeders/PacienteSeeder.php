<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'nombres'=> 'juan luis',
                'apellidos'=> 'gonzales caucota',
                'edad'=> '20',
                'sexo'=> 'masculino',
                'ci'=> '4521051',
                'tipo_sangre'=>'Orh+',
                'correo'=>'juanluis@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle crevo'
            ],
            [
                'nombres'=> 'jilmar',
                'apellidos'=> 'heredia ruiz',
                'edad'=> '23',
                'sexo'=> 'masculino',
                'ci'=> '2465287',
                'tipo_sangre'=>'Orh+',
                'correo'=>'jilmarheredia@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle los pinos'
            ],
            [
                'nombres'=> 'gustavo saul',
                'apellidos'=> 'vaca cardozo',
                'edad'=> '24',
                'sexo'=> 'masculino',
                'ci'=> '2456201',
                'tipo_sangre'=>'Arh+',
                'correo'=>'gustavosaul@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle sucre'
            ],
            [
                'nombres'=> 'luisa',
                'apellidos'=> 'tejerina cardozo',
                'edad'=> '22',
                'sexo'=> 'femenino',
                'ci'=> '2142557',
                'tipo_sangre'=>'ABrh+',
                'correo'=>'luisacardozo@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle bolivar'
            ],
            [
                'nombres'=> 'dario clider',
                'apellidos'=> 'sanchez',
                'edad'=> '30',
                'sexo'=> 'masculino',
                'ci'=> '1421526',
                'tipo_sangre'=>'Orh+',
                'correo'=>'dariosanchez@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle ballivian'
            ],
            [
                'nombres'=> 'miguel',
                'apellidos'=> 'amador romero',
                'edad'=> '27',
                'sexo'=> 'masculino',
                'ci'=> '2412517',
                'tipo_sangre'=>'Orh+',
                'correo'=>'miguelamador@gmail.com',
                'telefono'=>'75948123',
                'direccion'=>'calle junin'
            ],
            [
                'nombres'=> 'daira',
                'apellidos'=> 'rodriguez lopez',
                'edad'=> '23',
                'sexo'=> 'femenino',
                'ci'=> '2518012',
                'tipo_sangre'=>'Brh+',
                'correo'=>'dairarodriguez@gmail.com',
                'telefono'=>'74578759',
                'direccion'=>'calle las pizza'
            ]
        ]);
    }
}
