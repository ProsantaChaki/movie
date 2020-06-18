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
        //return $this->belongsToMany('App\Genre');
        return $this->belongsToMany('App\Genres', 'movie_genres', 'movie_id', 'genre_id');

        //return $this->hasManyThrough('genre', 'MovieGenres', 'id', 'movie_id');
    }
    public function slug(){
        //return $this->belongsToMany('App\Genre');
        return $this->hasOne('App\Slug', 'movie_id', 'id');

        //return $this->hasManyThrough('genre', 'MovieGenres', 'id', 'movie_id');
    }

}
