<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert(array(
            array(
                'user_id' => '1',
                'movie_id' => '1',
                'comment' => 'American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures.',

            ),
            array(
                'user_id' => '1',
                'movie_id' => '2',
                'comment' => 'American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures.',

            ),
            array(
                'user_id' => '2',
                'movie_id' => '2',
                'comment' => 'produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures.',

            ),
            array(
                'user_id' => '2',
                'movie_id' => '1',
                'comment' => 'Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner,',

            ),
            array(
                'user_id' => '1',
                'movie_id' => '3',
                'comment' => 'American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures.',

            ),
        ));
    }
}
