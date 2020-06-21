<?php

use Illuminate\Database\Seeder;

class MovieGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movie_genres')->insert(array(
            array(
                'genre_id' => '1',
                'movie_id' => '1',
            ),
            array(
                'genre_id' => '2',
                'movie_id' => '1',
            ),
            array(
                'genre_id' => '2',
                'movie_id' => '2',
            ),
            array(
                'genre_id' => '3',
                'movie_id' => '4',
            ),
            array(
                'genre_id' => '4',
                'movie_id' => '3',
            ),
            array(
                'genre_id' => '5',
                'movie_id' => '5',
            ),
            array(
                'genre_id' => '3',
                'movie_id' => '6',
            ),
            array(
                'genre_id' => '3',
                'movie_id' => '5',
            ),
            array(
                'genre_id' => '7',
                'movie_id' => '6',
            ),
            array(
                'genre_id' => '2',
                'movie_id' => '4',
            ),
            array(
                'genre_id' => '4',
                'movie_id' => '1',
            ),
            array(
                'genre_id' => '5',
                'movie_id' => '2',
            ),
        ));
    }
}
