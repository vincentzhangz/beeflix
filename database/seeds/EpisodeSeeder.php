<?php

use App\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $n = rand(10, 30);
            for ($j = 1; $j < $n; $j++) {
                $episode = new Episode();
                $episode->movie_id = $i;
                $episode->episode = $j;
                $episode->title = "Episode " . $faker->word;
                $episode->save();
            }
        }

    }
}
