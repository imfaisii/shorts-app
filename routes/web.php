<?php

use App\Http\Livewire\Countries\MainComponent as CountriesComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('test', fn () => Storage::url("thumbnails/fZAImIEU5uCTehpLBevcz5ipwjLisE0Fpr5SibTU.png"));

Route::get('/', fn () => redirect()->route('home'));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::view('countries', 'countries.livewire')->name('countries.livewire');
    Route::view('shorts', 'shorts.livewire')->name('shorts.livewire');
});
