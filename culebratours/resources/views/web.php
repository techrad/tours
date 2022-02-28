<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use LiveWire\LiveWire;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
    
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/tours', function () {
    return view('tour-result');
    
})->name('tours');

Route::get('/home', function () {
    return view('index');
});


Route::get('/packages', function () {
    return view('packages-result');
});
Route::get('/', function () {
    return view('bubbles');
});

Route::get('/test', function () {
    return view('test');
});

require __DIR__.'/auth.php';