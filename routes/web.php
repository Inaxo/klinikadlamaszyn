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


Route::get('/', function(){
    return view('home');
})->name('home');
Route::get('/polityka-prywatnosci', function(){
    return view('privacy');
})->name('privacy');
Route::get('o-nas', function(){
    return view('about');
})->name('about');
Route::get('/kontakt', function(){
    return view('contact');
})->name('contact');
