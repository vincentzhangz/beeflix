<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $movie = array(
            array(
                "title" => "",
                "photo" => "",
                "description" => "",
                "rating" => ""
            )
        );
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $movie = new Movie();
            $movie->genre_id = rand(1, 10);
            $movie->title = $faker->word;
            $movie->photo = "https://dummyimage.com/600x800/000000/ffffff.png&text=" . $movie->title;
            $movie->description = $faker->paragraph($nbSentences = 10, $variableNbSentences = true);
            $movie->rating = rand(0, 5);
            $movie->save();
        }
    }
}
