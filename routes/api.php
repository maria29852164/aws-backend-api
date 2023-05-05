<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FooterContentController;
use App\Http\Controllers\HeroContentController;
use App\Http\Controllers\SectionContentController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/users', UserController::class)->except(['create','edit']);
Route::resource('/products', ProductController::class)->except(['create','edit']);
Route::resource('/categories',CategoryController::class)->except(['create','edit']);
Route::resource('/hero', HeroContentController::class)->except(['create','edit']);
Route::resource('/footer', FooterContentController::class)->except(['create','edit']);
Route::resource('/section', SectionContentController::class)->except(['create','edit']);
