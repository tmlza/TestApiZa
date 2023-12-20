<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\FootballerApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/footballers',FootballerApiController::class);

// Route::post('/auth/login', [ApiTokenController::class, 'login']);
Route::post('/auth/register', [UserController::class, 'createUser']);
Route::post('/auth/login', [UserController::class, 'loginUser']);
// Route::post('/auth/register', [ApiTokenController::class, 'register']);
Route::middleware('auth:sanctum')->post('/auth/logout', [ApiTokenController::class, 'logout']);