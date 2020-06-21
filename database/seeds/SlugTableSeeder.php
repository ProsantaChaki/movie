<?php

use Illuminate\Database\Seeder;

class SlugTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('slugs')->insert(array(
            array(
                'movie_id' => '1',
                'slug' => 'avengers_endgame',
            ),
            array(
                'movie_id' => '2',
                'slug' => '3_diots',
            ),
            array(
                'movie_id' => '3',
                'slug' => '10_Forrest-Gump',
            ),
            array(
                'movie_id' => '4',
                'slug' => '11_Mad-Max-Fury-Road',
            ),
            array(
                'movie_id' => '5',
                'slug' => '12_Titanic',
            ),
            array(
                'movie_id' => '6',
                'slug' => '21_The-Matrix',
            ),
        ));
    }
}
