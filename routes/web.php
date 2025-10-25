<?php

use App\Http\Controllers\CurryController;
use App\Http\Controllers\EachCurry;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/', [App\Http\Controllers\CurryController::class, 'home'])->name('home');
Route::get('/menu', [App\Http\Controllers\CurryController::class, 'menu'])->name('menu');
Route::get('/contact', [App\Http\Controllers\CurryController::class, 'contact'])->name('contact');
Route::get('/menu/{id}', [App\Http\Controllers\CurryController::class, 'menuDetail'])->name('menu.detail');

Route::get('/dashboard',[CurryController::class,'index']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('curry', EachCurry::class);

});

require __DIR__.'/auth.php';
