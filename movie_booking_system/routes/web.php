<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
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

Route::get('/',function(){
    if(session()->has('userid')){
        return redirect()->intended(RouteServiceProvider::HOME);
    }
    return view('auth.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::view('/dashboard','dashboard' )->name('dashboard');
    Route::view('/promotion','promotion' )->name('promotion');
    Route::view('/bookings_history','bookings_history' )->name('bookings_history');
    Route::view('/book','book')->name('book');
    Route::view('/select_movie','select_movie')->name('select_movie');
  
    Route::get('/movies', [BookingController::class, 'showMovies']);
});



require __DIR__.'/auth.php';

