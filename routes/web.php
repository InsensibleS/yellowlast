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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/courses', function () {
    return view('courses');
})->name('courses');
Route::get('/events', function () {
    return view('events');
})->name('events');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/list', function () {
    return view('list');
})->name('list');
Route::get('/new', function () {
    return view('new');
})->name('new');
Route::get('/teachers', function () {
    return view('teachers');
})->name('teachers');
Route::get('/course-single', function () {
    return view('course-single');
})->name('course-single');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
