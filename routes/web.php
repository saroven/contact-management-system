<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'showContact'])->name('home');

Route::get('/add-contact', [ContactController::class, 'addContact'])->name('addContact');
//insert contact
Route::post('/add-contact', [ContactController::class, 'insertContact'])->name('insertContact');

Route::get('/manage-user', function () {
    return view('public.manageUser');
})->name('manageUser');

Route::get('/site-configuration', function () {
    return view('public.siteConfiguration');
})->name('siteConfiguration');

Route::get('/login', function () {
    return view('public.login');
})->name('login');

Route::get('/register', function () {
    return view('public.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('public.forgotPassword');
})->name('forgotPassword');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
