<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PeopleController;
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


Route::prefix('peoples')->group(function() {
   Route::get('', [PeopleController::class, 'index']);
   Route::post('', [PeopleController::class, 'store']);
   Route::get('{people}', [PeopleController::class, 'show']);
   Route::put('{people}', [PeopleController::class, 'update']);
   Route::delete('{people}', [PeopleController::class, 'destroy']);
});
Route::prefix('contacts')->group(function() {
   Route::post('', [ContactController::class, 'store']);
   Route::get('{contact}', [ContactController::class, 'show']);
   Route::put('{contact}', [ContactController::class, 'update']);
   Route::delete('{contact}', [ContactController::class, 'destroy']);
});
