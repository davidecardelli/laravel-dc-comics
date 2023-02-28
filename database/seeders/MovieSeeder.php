<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = config('movies');

        foreach ($movies as $movie) {
            $new_movie = new Movie();
            $new_movie->title = $movie['title'];
            $new_movie->description = $movie['description'];
            $new_movie->thumb = $movie['thumb'];
            $new_movie->price = str_replace('$', '', $movie['price']);
            $new_movie->title = $movie['title'];
            $new_movie->series = $movie['series'];
            $new_movie->sale_date = $movie['sale_date'];
            $new_movie->type = $movie['type'];
            $new_movie->artists = implode(',', $movie['artists']);
            $new_movie->writers = implode(',', $movie['writers']);
            $new_movie->save();
        }
    }
}
