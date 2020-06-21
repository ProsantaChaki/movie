<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $fillable = [
        'comment',
        'user_id',
        'movie_id',
    ];    //

    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
