<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\MovieList;

use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //


    public function getAllMovie(){

        $roles = MovieList::with('genre')->with('slug')->orderBy('id')->paginate(1);

        return response()->json(['message' => 'your request has been processed', 'data' =>  $roles]);
    }

}
