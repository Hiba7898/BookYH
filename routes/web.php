<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/accueil', [ProjetController::class, 'accueil'])->name("accueil");
    Route::get('/About', [ProjetController::class, 'About'])->name("About");
    Route::get('/contact', [ProjetController::class, 'contact'])->name("contact");
    Route::get('/orders', [ProjetController::class, 'orders'])->name("orders");
   
});
 Route::get('/BOOKYH', [ProjetController::class, 'BOOKYH'])->name("BOOKYH");

require __DIR__.'/auth.php';
