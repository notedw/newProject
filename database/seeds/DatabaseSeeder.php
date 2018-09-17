<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'			=> 'Augusto', 
        	'phone'			=> '9605', 
        	'email'			=> 'augusto@sistema.com', 
        	'password'		=> env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
        ]);
    }
}
