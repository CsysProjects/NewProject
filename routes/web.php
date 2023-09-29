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
Route::view('register','frontend.pages.register');



// Routes for admin //

// Route::view('admin','frontend.adminpanel.admin');
Route::view('admin/dashboard','frontend.adminpanel.dashboard');
Route::view('admin/category','frontend.adminpanel.category.index');
Route::view('admin/subcategory','frontend.adminpanel.subcategory.index');
Route::view('admin/post','frontend.adminpanel.post.index');
Route::view('admin/location','frontend.adminpanel.location.index');
Route::view('admin/listings','frontend.adminpanel.listings.index');
Route::view('admin/plan','frontend.adminpanel.plan.index');
Route::view('admin/payment','frontend.adminpanel.payment.index');
Route::view('admin/transactions','frontend.adminpanel.transactions.index');
Route::view('admin/user','frontend.adminpanel.user.index');
Route::view('admin/system','frontend.adminpanel.system.index');

