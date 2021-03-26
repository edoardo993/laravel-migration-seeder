<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $album = new Album();
            $album->album_name = $faker->name();
            $album->group_name = $faker->name();
            $album->genre = $faker->text();
            $album->songs_number = rand(1, 12);
            $album->year = rand(1990, 2010);
            $album->save();
        }
    }
}
