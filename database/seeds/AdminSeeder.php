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
          'nombre'=>'Pilar Rodrigez',
          'tipo_identificacion'=>'cedula',
          'identificacion'=>'11111111'
        ]);

        DB::table('administradors')->insert([
          'id'=>'1',
          'usuario'=>'admin',
          'contrasena'=>'12345'
        ]);

        DB::table('usuarios')->insert([
          'nombre'=>'Doctor',
          'tipo_identificacion'=>'cedula',
          'identificacion'=>'11111112'
        ]);

        DB::table('docentes')->insert([
          'id'=>2,
          'usuario'=>'docente',
          'contrasena'=>'12345',
          'codigo'=>'1052345'
        ]);

        DB::table('usuarios')->insert([
          'nombre'=>'Eliam',
          'tipo_identificacion'=>'cedula',
          'identificacion'=>'11111113'
        ]);

        DB::table('estudiantes')->insert([
          'id'=>3,
          'codigo'=>'1152312'
        ]);
    }
}
