<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\CommandLineController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|---------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::middleware('api')->group(function () {
Route::resource('Category', CategoryController::class);
});

Route::middleware('api')->group(function () {
Route::resource('Command', CommandController::class);
});

Route::middleware('api')->group(function () {
Route::resource('CommandLine', CommandLineController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('Product', ProductController::class);
    });

Route::middleware('api')->group(function () {
Route::resource('Profil', ProfilController::class);
});

Route::middleware('api')->group(function () {
            Route::resource('Reaction', ReactionController::class);
            });

Route::middleware('api')->group(function () {
Route::resource('Shop', ShopController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('Socialmedia', SocialmediaController::class);
    });
Route::middleware('api')->group(function () {
Route::resource('User', UserController::class);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
    ], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    });

