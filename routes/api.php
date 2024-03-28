<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;


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

Route::get('/users/{id}',[UserController::class, 'show'] );
Route::post('/login',[LoginController::class, 'login'] );
Route::get('/auth',[LoginController::class,'checkAuth'])->middleware('auth:sanctum');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/users',[UserController::class, 'showAll'] );

Route::post('/users', [UserController::class, 'store']);

//posts
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}',[PostController::class, 'show'] );
Route::get('/posts',[PostController::class, 'showAll'] );
Route::get('/posts/user/{id}',[PostController::class, 'showUserPosts'] );

//tags
Route::get('/posts/liked/{id}',[PostController::class, 'showLikedPosts'] );

