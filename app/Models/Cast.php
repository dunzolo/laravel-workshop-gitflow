<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    protected $fillable = ['name_surname', 'slug'];

    /**
     * Get the cast movies
     *
     * @return void
     */
    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
