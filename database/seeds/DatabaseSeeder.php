<?php

use Illuminate\Database\Seeder;
use App\User;

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

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@rennytravel.com',
            'password' => bcrypt('admin')
        ]);
    }
}
