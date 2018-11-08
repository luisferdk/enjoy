<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Reservation;
use App\Transfer;
use App\Tour;
use App\Vip;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Reservation::truncate();

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@rennytravel.com',
            'password' => bcrypt('admin')
        ]);
        
        for ($i=0; $i < 10; $i++) { 
            Reservation::create([
                'nombre' =>"Nombre $i",
                'apellido' =>"Apellido $i",
                'correo' =>"Correo $i",
                'telefono' =>"telefono $i",
                'comentarios' =>"comentarios $i",
                'precio' =>"$i",
                'hotel' =>"hotel $i",
                'id_pago' =>"HASKH238Y $i",
                'estado' =>1,
            ]);
        }

        for ($i=0; $i < 10; $i++) { 
            Transfer::create([
                "de" => "Origen",
                "para" => "Destino",
                "pasajeros" => "2",
                "tipo" => 1,
                "llegada_fecha" => "2018-01-01",
                "llegada_hora" => "Hora 1",
                "llegada_aerolinea" => "Aerolinea 1",
                "llegada_vuelo" => "Vuelo 1",
                "salida_fecha" => "2018-01-01",
                "salida_hora" => "Hora 2",
                "salida_aerolinea" => "Aerolinea 2",
                "salida_vuelo" => "Vuelo 2",
                "precio" => 100,
                "reservation_id" => rand(1,10)
            ]);
        }
    }
}
