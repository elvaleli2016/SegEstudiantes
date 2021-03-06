<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$start = new DateTime(date('Y-m-d H:i:s', $val));
        DB::table('usuarios')->insert([
          'nombre'=>'Pilar',
          'apellido'=>"Rodrigez",
          'tipo_identificacion'=>'cedula',
          'identificacion'=>'11111111',
          'estado'=>'0'
        ]);

        DB::table('administradores')->insert([
          'id'=>'1',
          'usuario'=>'admin',
          'password'=>'12345'
        ]);

        DB::table('usuarios')->insert([
          'nombre'=>'Doctor',
          'apellido'=>"Tor",
          'tipo_identificacion'=>'cedula',
          'identificacion'=>'11111112',
          'estado'=>'0'
        ]);

        DB::table('docentes')->insert([
          'id'=>2,
          'usuario'=>'docente',
          'password'=>'12345',
          'codigo'=>'1052345'
        ]);

        DB::table('usuarios')->insert([
          'nombre'=>'Eliam',
          'apellido'=>'Zapata',
          'tipo_identificacion'=>'cedula',
          'identificacion'=>'11111113',
          'estado'=>'0'
        ]);

        DB::table('estudiantes')->insert([
          'id'=>3,
          'codigo'=>'1152312'
        ]);
    }
}
