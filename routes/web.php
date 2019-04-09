<?php

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
    return view('home');
});

<<<<<<< HEAD
Route::get('/addgallery', function () {
    return view('addGallery');
});
=======
Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/addProjects', function () {
    return view('addProjects');
});

Route::get('/addGallery', function () {
    return view('addGallery');
});

Route::get('/addTestimony', function () {
    return view('addTestimony');
});
>>>>>>> 7d9bd2880d37b1a279956ead89185e69984057d8
