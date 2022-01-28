<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Joke;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker  $faker)
    {
        Joke::truncate();
        for($i = 0; $i < 30; $i++ ){
            $new_joke = new Joke();
            $new_joke->author = $faker->text(20);
            $new_joke->title = $faker->text(30);
            $new_joke->content = $faker->text();

            $new_joke->save();
        }
    }
}
