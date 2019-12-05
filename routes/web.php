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
//Contact
Route::get('/contact', function () {
    return view('layouts/partials/contact');
});

//Pages 

//Home
Route::get('/home', function () {
    return view('home');
});

//Project
Route::get('/project', function () {
    return view('project');
});
//Project2
Route::get('/project2', function () {
    return view('project2');
});


//About
Route::get('/about', function () {
    return view('about');
});

//Gallery
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
