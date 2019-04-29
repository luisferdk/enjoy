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
    }
}
