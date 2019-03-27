<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Reservation;
use App\Transfer;
use App\Tour;
use App\Hotel;
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
        Transfer::truncate();
        Tour::truncate();
        Vip::truncate();

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@enjoy.com',
            'password' => bcrypt('admin'),
            'token' => '',
            'type' => 1
        ]);

        $reservation = Reservation::create([
            "nombre" => "Luis",
            "apellido" => "Fernandez",
            "correo" => "luisdk.03@gmail.com",
            "telefono" => "+584264712812",
            "comentarios" => "Hola",
            "precio" => 120,
            "hotel" => "Hard Rock Hotel",
            "id_pago" => "3347ZCB34HJ",
            "estado" =>1
        ]);

        $hotel = Hotel::create([
            "fecha_inicio" =>"2019-03-01",
            "fecha_fin" =>"2019-03-10",
            "hotel" =>"Hard Rock Hotel",
            "adultos" =>"3",
            "ninos" =>"2",
            "precio" =>40,
            "reservation_id" =>$reservation->id,
        ]);
    }
}
