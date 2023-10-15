<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PetsController;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/petcare', function () {
    return view('petcare');
});

Route::get('/pets', function () {
    return view('pets');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/adoption', function () {
    return view('adoption');
})->middleware(['auth', 'verified'])->name('adoption');

Route::get('/delete/{id}', [EventController::class, 'delete'])->name('delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/dashboard', [EventController::class, 'store'])->name('dashboard.post');
    Route::post('/adoption', [PetsController::class, 'store'])->name('adoption.post');
});

require __DIR__.'/auth.php';
