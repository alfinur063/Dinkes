<?php

use App\Http\Controllers\AuthController;
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

Route::controller(AuthController::class)->group(fn () => [
    Route::get('/register', 'indexRegister')->middleware('guest'),
    Route::post('/register', 'register')->middleware('guest'),

    Route::get('/login', 'indexLogin')->middleware('guest')->name('login'),
    Route::post('/login', 'login')->middleware('guest'),

    Route::post('/logout', 'logout')->name('logout'),
]);

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


Route::get('/users', function () {
    return view('user-templates');
});


// users
Route::get('/templates', function () {
    return view('user-template-list');
});

Route::get('/user-upload', function () {
    return view('user-upload');
});
