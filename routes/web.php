<?php

use App\Http\Controllers\admin\articlecontroller;
use App\Http\Controllers\Admin\categorycontroller;
use App\Http\Controllers\Admin\NewsAdvertiseController;
use App\Http\Controllers\frontend\frontendcontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get("/",[frontendcontroller::class,'home'])->name('home.page');
Route::get("/catogery/{slug}",[frontendcontroller::class,'catogerys'])->name('catogery.page');
Route::get('/search',[frontendcontroller::class,'search'])->name('search.news');
Route::get('/newsdesc/{slug}',[frontendcontroller::class,'newsdesc'])->name('news');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('/admin/catogery',categorycontroller::class)->names('admin.catogery');
route::resource('/admin/article',articlecontroller::class)->names('admin.artical');
Route::resource('/admin/advertise',NewsAdvertiseController::class)->names('admin.advertise');
require __DIR__.'/auth.php';
