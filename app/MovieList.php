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

}
