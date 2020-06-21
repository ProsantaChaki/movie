<?php

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
        //
        DB::table('users')->insert(array(
            array(
                'name' => 'Chaki',
                'email' => 'kajolchaki@gmail.com',
                'password' => bcrypt('123456'),

            ),
            array(
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('123456'),
            ),
        ));
    }
}
