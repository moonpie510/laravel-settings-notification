<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'settings'], function () {
    Route::get('/', [App\Http\Controllers\Settings\SettingsController::class, 'userSettings'])->name('settings.user');
    Route::post('/{user}', [App\Http\Controllers\Settings\SettingsController::class, 'changeUserSettings'])->name('settings.change');
    Route::get('/method', [App\Http\Controllers\Settings\SettingsController::class, 'method'])->name('settings.method');
    Route::post('/method/{user}', [App\Http\Controllers\Settings\SettingsController::class, 'changeMethod'])->name('settings.method.change');
});

Route::get('/is_auth', [App\Http\Controllers\Settings\SettingsController::class, 'isAuth']);

Route::get('{any}', [App\Http\Controllers\IndexController::class, 'index'])->where('any', '[A-Za-z]*');
