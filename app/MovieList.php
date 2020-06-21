<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieList extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'release',
        'user_id',
        'date',
        'rating',
        'ticket',
        'price',
        'country',
        'photo',
    ];

    public function genre(){
        return $this->belongsToMany('App\Genres', 'movie_genres', 'movie_id', 'genre_id');
    }

    public function slug(){
        return $this->hasOne('App\Slug', 'movie_id', 'id');
    }

}
