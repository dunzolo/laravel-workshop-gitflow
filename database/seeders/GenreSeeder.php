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
        $genres = ['Comico', 'Drammatico', 'Fantasy', 'Horror', 'Documentario', 'Biografico'];

        foreach($genres as $genre){
            $new_genre = new Genre();
            $new_genre->name = $genre;
            $new_genre->slug = Str::slug($new_genre->name, '-'); //crea lo slug partendo dal title mettendo i trattini al posto dello spazio e tutto minuscolo

            $new_genre->save();
        }
    }
}
