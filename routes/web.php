<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.userLayout');
});

Route::get('film/{slug}', function ($slug) {
    if($slug=='create'){
        return view('movie.create');
    }else return view('movie.single_movie')->with('slug',$slug);
});


