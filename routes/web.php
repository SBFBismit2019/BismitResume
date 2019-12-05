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

Route::get('/profilepage', function () {
    return view('profilepage');
});
// Navbar 
Route::get('/navbar', function () {
    return view('layouts/partials/navbar');
});
// footer
Route::get('/footer', function () {
    return view('layouts/partials/footer');
});
// footer
Route::get('/footer', function () {
    return view('layouts/partials/footer');
});
// footer
Route::get('/contact', function () {
    return view('layouts/partials/contact');
});
//Project
Route::get('/project', function () {
    return view('project');
});
//SecondProject
Route::get('/project2', function () {
    return view('project2');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/addTestimony', function () {
    return view('addTestimony');
});

Route::resource('projects', 'ProjectsController');
Route::resource('galleries', 'GalleriesController');
Route::resource('testimonies', 'TestimoniesController');
