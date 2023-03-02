<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('category/{category}/posts', [CategoryController::class, 'posts']);
Route::get('post/slug/{post:slug}', [PostController::class, 'slug']);
Route::get('category/slug/{slug}', [CategoryController::class, 'slug']);

Route::put('post/slug/{post:slug}', [PostController::class, 'update']);

Route::post('post/upload/{post}', [PostController::class, 'upload']);

Route::resource('category', CategoryController::class)->except('edit', 'create');
Route::resource('post', PostController::class)->except('edit', 'create');
