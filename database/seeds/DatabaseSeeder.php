<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FilmListTableSeeder::class,
            CommentTableSeeder::class,
            GenreTableSeeder::class,
            MovieGenreTableSeeder::class,
            SlugTableSeeder::class,
            UserSeeder::class,
            CountryTableSeeder::class,
            CommentTableSeeder::class,

        ]);
    }
}
