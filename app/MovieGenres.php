<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieGenres extends Model
{
    //
    protected $fillable = [
        'genre_id',
        'movie_id',
    ];


}
