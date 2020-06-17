<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slug extends Model
{
    //
    protected $fillable = [
        'movie_id',
        'slug'
    ];
}
