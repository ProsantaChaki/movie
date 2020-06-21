<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->insert(array(
            array(
                'name' => 'Action',
            ),
            array(
                'name' => 'Comedy',
            ),
            array(
                'name' => 'Drama',
            ),
            array(
                'name' => 'Fantasy',
            ),
            array(
                'name' => 'Horror',
            ),
            array(
                'name' => 'Mystery',
            ),
            array(
                'name' => 'Romance',
            ),
        ));
    }
}
