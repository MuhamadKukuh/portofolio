<?php

use App\post;
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
    return view('home', [
        
        "title" => "Home",
        "posts" => post::all(),
        "gamabr" => "project.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "gamabar" => "project.jpg",
        "posts" => post::all(),
    ]);
});

Route::get('/blog', function () {
    return view('post', [
        "title" => "post",
        "posts" => post::all(),
        "name" => "Muhamad Kukuh Setiadi"
    ]);
});

Route::get('/project', function () {
    return view('project', [
        "title" => "post",
        "posts" => post::all(),
        "name" => "Muhamad Kukuh Setiadi"
    ]);
});
