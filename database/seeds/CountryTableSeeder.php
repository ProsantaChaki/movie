<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->insert(array(
            array(
                'name' => 'Bangladesh',
            ),
            array(
                'name' => 'India',
            ),
            array(
                'name' => 'Usa',
            ),
            array(
                'name' => 'Germany',
            ),
            array(
                'name' => 'China',
            ),
            array(
                'name' => 'Korea',
            ),
        ));
    }
}
