<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raúl Muñoz',
            'email' => 'raul.munoz@uprevenue.mx',
            'password' => bcrypt('BAba#1#2#3')
        ]);
    }
}
