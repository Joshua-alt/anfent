<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('users', App\Http\Controllers\userController::class);

Route::resource('agents', App\Http\Controllers\agentController::class);

Route::resource('enfants', App\Http\Controllers\enfantController::class);

Route::resource('parents', App\Http\Controllers\parentController::class);

Route::resource('listsParents', App\Http\Controllers\ListsParentsController::class);

Route::resource('listsParents', App\Http\Controllers\ListsParentsController::class);

Route::resource('reunificcations', App\Http\Controllers\reunificcationController::class);

Route::get('/chambredata/{id}/edit', 'App\Http\Controllers\reunificcationController@eedit');
Route::get('/chambredata/{id}/edith', 'App\Http\Controllers\enfantController@edith');
