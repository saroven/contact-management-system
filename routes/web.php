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
