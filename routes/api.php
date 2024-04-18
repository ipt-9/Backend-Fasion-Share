<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LinkController;




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
//login/logout
Route::post('/login',[LoginController::class, 'login'] );
Route::get('/auth',[LoginController::class,'checkAuth'])->middleware('auth:sanctum');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');


//users
Route::get('/users/{id}',[UserController::class, 'show'] );
Route::get('/getusers',[UserController::class, 'showAll'] );
Route::post('/users', [UserController::class, 'store']);

//posts
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}',[PostController::class, 'show'] );
Route::get('/posts',[PostController::class, 'showAll'] );
Route::get('/posts/user/{id}',[PostController::class, 'showUserPosts'] );


Route::get('/posts/liked/{id}',[PostController::class, 'showLikedPosts'] );

//tags
Route::post('/tags', [TagController::class, 'store']);

//links
Route::post('/links', [LinkController::class, 'store']);

