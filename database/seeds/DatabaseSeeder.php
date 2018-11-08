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
            ]);
        }
    }
}
