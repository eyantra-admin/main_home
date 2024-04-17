<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API_Stat;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('elsi-lab-count/{year?}', [API_stat\ElsiLabController::class, 'elsiLabCount'])->where('year', '[0-9]+');
Route::get('elsi-colleges/{year}/{state}', [API_stat\ElsiLabController::class, 'elsiCollegeList'])->where('year', '[0-9]+');
Route::get('elsi-colleges-state/{state}', [API_stat\ElsiLabController::class, 'elsiStateCollegeList']);

Route::get('get-engagement-level/{year?}', [API_stat\ElsiLabController::class, 'engagement_level'])->where('year', '[0-9]+');
Route::get('get-initiative-data/{initiative}', [API_stat\ElsiLabController::class, 'engagement_level_initiative']);

Route::get('get-research-published', [API_stat\ElsiLabController::class, 'researchPublished']);

