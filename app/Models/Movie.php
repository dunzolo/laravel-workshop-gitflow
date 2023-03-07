<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'original_title', 'nationality', 'release_date', 'vote', 'cover_path', 'genre_id'];

    /**
     * Get genre
     *
     * @return void
     */
    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    /**
     * Get the movie casts
     *
     * @return void
     */
    public function casts(){
        return $this->belongsToMany(Cast::class);
    }

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }
}
