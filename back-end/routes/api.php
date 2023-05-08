<?php

use App\Http\Controllers\API\BlockController;
use App\Http\Controllers\API\DayController;
use App\Http\Controllers\API\WeekController;
use App\Http\Controllers\API\ExerciseController;
use App\Http\Controllers\API\TestController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('blocks', BlockController::class);
Route::resource('weeks', WeekController::class);
Route::resource('days', DayController::class);
Route::resource('exercises', ExerciseController::class);

Route::resource('tests', TestController::class);
