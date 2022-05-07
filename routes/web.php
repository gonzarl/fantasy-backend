<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinishesController;
use App\Http\Controllers\DriversInTeamsController;
use App\Http\Controllers\DriverController;

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

Route::resource('drivers', 'App\Http\Controllers\DriverController')->middleware(['auth']);
Route::resource('teams', 'App\Http\Controllers\TeamController')->middleware(['auth']);
Route::resource('races', 'App\Http\Controllers\RaceController')->middleware(['auth']);
Route::resource('users', 'App\Http\Controllers\UserController')->middleware(['auth']);
Route::resource('finishes', 'App\Http\Controllers\FinishesController')->middleware(['auth']);
Route::resource('drivers_in_teams', 'App\Http\Controllers\DriversInTeamsController')->middleware(['auth']);

Route::match(['get', 'post'], '/finishes/{id}/create_result', [FinishesController::class,'createResult'])->middleware(['auth']);
Route::get('/finishes/{id}/show_result', [FinishesController::class,'showResult'])->middleware(['auth']);
Route::match(['get', 'post'], '/drivers_in_teams/{id}/create_lineup', [DriversInTeamsController::class,'createLinup'])->middleware(['auth']);

Route::resource('image', 'App\Http\Controllers\ImageController')->middleware(['auth']);

Route::get('/drivers_create/search', [DriverController::class,'search'])->middleware(['auth']);
Route::post('/drivers_create/search', [DriverController::class,'searchInService'])->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
