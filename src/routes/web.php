<?php

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

use App\Http\Controllers\ThreadCommentsController;
use App\Http\Controllers\ThreadsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('top');

Route::group(['prefix' => 'threads', 'as' => 'threads.'], function () {
    Route::get('/', ThreadsController::getControllerName() . '@index')->name('index');
    Route::get('/{id}', ThreadsController::getControllerName() . '@show')->name('show');
    Route::post('/', ThreadsController::getControllerName() . '@create')->name('create');
});

Route::group(['prefix' => 'thread_comments', 'as' => 'thread_comments.'], function () {
    Route::post('/', ThreadCommentsController::getControllerName() . '@create')->name('create');
});
