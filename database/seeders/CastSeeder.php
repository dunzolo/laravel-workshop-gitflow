<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Cast;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $casts = config('casts');

        foreach($casts as $cast){
            $new_cast = new Cast();
            $new_cast->name_surname = $cast;
            $new_cast->slug = Str::slug($new_cast->name_surname, '-'); //crea lo slug partendo dal title mettendo i trattini al posto dello spazio e tutto minuscolo

            $new_cast->save();
        }
    }
}
