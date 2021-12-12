<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'showContact'])->middleware('auth')->name('home');

Route::get('/add-contact', [ContactController::class, 'addContact'])->middleware('auth')->name('addContact');
//insert contact
Route::post('/add-contact', [ContactController::class, 'insertContact'])->middleware('auth')->name('insertContact');

Route::get('/manage-user', function () {
    return view('public.manageUser');
})->name('manageUser');

Route::get('/site-configuration', function () {
    return view('public.siteConfiguration');
})->name('siteConfiguration');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'showProfilePage'])->middleware(['auth'])->name('profile');
Route::post('/profile/update', [\App\Http\Controllers\ProfileController::class, 'updateProfile'])->middleware(['auth'])->name('profile.update');

require __DIR__.'/auth.php';

