<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateSlug($genre)
    {
        return Str::slug($genre, '-');
    }

    /**
     * Get all movies
     *
     * @return void
     */
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
