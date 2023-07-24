<?php

use App\Http\Controllers\API\v1\AuthController;
use App\Http\Controllers\API\v1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'api', 'prefix' => 'v1'], function ($router) {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
});

// Private Api

// Route::group(['prefix' => 'v1',  'middleware' => 'auth:api'], function () {
//     Route::get('products', [ProductController::class, 'index']);
// });
// Route::group(['middleware' => 'api', 'prefix' => 'v1'], function ($router) {
//     Route::get('products', [ProductController::class, 'index']);
// });
// Public Api
Route::group(['prefix' => 'v1'], function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::get('/test', function () {
        return "Test Ok";
    });
});
