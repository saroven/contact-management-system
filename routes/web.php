<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/add-contact', function () {
    return view('public.addContact');
})->name('addContact');

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
