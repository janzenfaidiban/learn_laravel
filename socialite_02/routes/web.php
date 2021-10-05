<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/login/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/login/google/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});

Route::get('/login/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/login/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();

    // $user->token
});

Route::get('/login/github', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/login/github/callback', function () {
    $user = Socialite::driver('github')->user();

    // $user->token
});
