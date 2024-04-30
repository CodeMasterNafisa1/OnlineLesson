<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return redirect()->route('sciences');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/sciences',[\App\Http\Controllers\AdminController::class,'sciences'])->middleware(['auth','verified'])->name('sciences');

Route::get('/topics',[\App\Http\Controllers\AdminController::class,'topics'])->middleware(['auth','verified'])->name('topics');

Route::get('/tests',[\App\Http\Controllers\AdminController::class,'tests'])->middleware(['auth','verified'])->name('tests');

Route::resource('Science',\App\Http\Controllers\ScienceController::class)->middleware(['auth','verified']);

Route::resource('Check',\App\Http\Controllers\CheckController::class)->middleware(['auth','verified']);

Route::resource('Topics',\App\Http\Controllers\TopicsController::class)->middleware(['auth','verified']);

Route::resource('Certificates',\App\Http\Controllers\CertificateController::class)->middleware(['auth','verified']);

Route::resource('Test',\App\Http\Controllers\TestController::class)->middleware(['auth','verified']);

Route::post("/showsc",[\App\Http\Controllers\AdminController::class,'showsc'])->middleware(['auth','verified'])->name('showsc');

Route::post("/showtp",[\App\Http\Controllers\AdminController::class,'showtp'])->middleware(['auth','verified'])->name('showtp');
