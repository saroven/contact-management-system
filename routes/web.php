<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::middleware(['admin'])->group(function (){
    Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('dashboard');

    Route::get('/manage-user', [AdminController::class, 'showManageUserPage'])->name('manageUser');

    Route::get('/site-configuration', [SettingsController::class, 'show'])->name('siteConfiguration');
    Route::post('/site-configuration', [SettingsController::class, 'update'])->name('siteConfiguration');

});
Route::middleware(['auth'])->group(function (){ //route middleware group
    Route::get('/', [ContactController::class, 'showContact'])->name('home');

    Route::get('/add-contact', [ContactController::class, 'addContact'])->name('addContact');
    //insert contact
    Route::post('/add-contact', [ContactController::class, 'insertContact'])->name('insertContact');

    Route::get('/contact/import-export', [ContactController::class, 'importExport'])->name('importExport');

    Route::post('/contact/export', [ContactController::class, 'export'])->name('export');

    Route::post('/contact/import', [ContactController::class, 'import'])->name('import');

    Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('edit');

    Route::post('/contact/edit/{id}', [ContactController::class, 'update'])->name('update');

    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('delete');

    Route::get('change-password', [UserController::class, 'changePassword'])->name('changePassword');
    Route::post('change-password', [UserController::class, 'updatePassword'])->name('updatePassword');


    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'showProfilePage'])->middleware(['auth'])->name('profile');
    Route::post('/profile/update', [\App\Http\Controllers\ProfileController::class, 'updateProfile'])->middleware(['auth'])->name('profile.update');

    Route::get('logout', function(){
        Auth::logout();
        return redirect()->back();
    })->name('customLogout');
});

require __DIR__.'/auth.php';

