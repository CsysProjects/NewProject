<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.home');
});


Route::view('about','frontend.pages.about');
Route::view('services','frontend.pages.services');
Route::view('contact','frontend.pages.contact');
Route::view('login','frontend.pages.login');
Route::view('register','frontend.pages.');