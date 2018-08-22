<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'lastname' => 'Issaev',
            'firstname' => 'Anzor',
            'email' => 'anzor.i@outlook.fr',
            'password' => bcrypt('23052305'),
        ]);

    }
}
