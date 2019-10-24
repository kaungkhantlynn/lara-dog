<?php

use Illuminate\Database\Seeder;

class DogTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\DogType', 100)->create();
    }
}
