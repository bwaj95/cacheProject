<?php

use App\Http\Controllers\AuthorsBwajController;
use App\Http\Controllers\AuthorsGanaController;
use App\Http\Controllers\AuthorsJasonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('bwaj', AuthorsBwajController::class);
Route::resource('gana', AuthorsGanaController::class);
Route::resource('jason', AuthorsJasonController::class);
