<?php

use App\Http\Controllers\Event;
use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);
Route::get('/evenements/', [EventController::class, 'index'])->name('list-event');
Route::get('/evenements/{slug}', [EventController::class, 'show'])->name('show-event');
