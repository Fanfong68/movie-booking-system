<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
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
    if(session()->getId()){
        return redirect()->intended(RouteServiceProvider::HOME);
    }
    return view('auth.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::view('/dashboard','dashboard' )->name('dashboard');
    Route::view('/admin_panel','admin_panel' )->name('admin_panel');
    Route::view('/bookings_history','bookings_history' )->name('bookings_history');
    Route::view('/book','book')->name('book');
    Route::view('/select_movie','select_movie')->name('select_movie');
    Route::view('/select_seat/{data}','select_seat')->name('select_seat');
   
    Route::post('/submit_info',[BookingController::class,'submit_info'])->name('submit_info');
    Route::post('/add_booking',[BookingController::class,'add_booking'])->name('add_booking');

});



require __DIR__.'/auth.php';

