<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = array("Drama", "Kids", "Movie");
        $faker = Faker\Factory::create();

//        foreach ($genres as $g) {
//            $genre = new Genre();
//            $genre->name = $g;
//            $genre->save();
//        }

        for ($i = 1; $i <= 10; $i++) {
            $genre = new Genre();
            $genre->name = $faker->word;
            $genre->save();
        }
    }
}
