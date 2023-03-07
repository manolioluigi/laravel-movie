<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Fantasy', ' Science fiction', 'Horror', 'Drama', 'Comedy'];

        foreach($genres as $genre){
            $newGnere = new Gnere();
            $newGnere->gnere = $genre;
            $newGnere->slug = generateSlug($genre);

            $newGnere->save();
        }
    }
}
