<?php

use App\Models\Doner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonersController;

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
    return view('welcome')->with('doners',Doner::get());
});
Route::get('/A-', function () {
    return view('ANegative')->with('doners',Doner::get());
});
Route::get('/A+', function () {
    return view('APositive')->with('doners',Doner::get());
});
Route::get('/B+', function () {
    return view('BPositive')->with('doners',Doner::get());
});
Route::get('/B-', function () {
    return view('BNegative')->with('doners',Doner::get());
});
Route::get('/AB+', function () {
    return view('ABPositive')->with('doners',Doner::get());
});
Route::get('/AB-', function () {
    return view('ABNegative')->with('doners',Doner::get());
});
Route::get('/O+', function () {
    return view('OPositive')->with('doners',Doner::get());
});
Route::get('/O-', function () {
    return view('ONegative')->with('doners',Doner::get());
});

Route::resource('doners', DonersController::class);
Route::post('/create',[DonersController::class, 'store'])->name('store');
Route::post('/update/{doner}',[DonersController::class, 'update'])->name('update');
Route::get('/delete/{doner}',[DonersController::class, 'destroy'])->name('destroy');
Route::get('/dashboard', function () {
    return view('doners')->with('doners',Doner::get());
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

