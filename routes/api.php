<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProdectController;

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




Route::post('register',[AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);
Route::post('refresh', [AuthController::class,'refresh']);
Route::post('logout', [AuthController::class,'logout']);
Route::post('admin/register',[AdminAuthController::class,'register']);
Route::post('admin/login', [AdminAuthController::class,'login']);
Route::post('admin/refresh', [AdminAuthController::class,'refresh']);
Route::post('admin/logout', [AdminAuthController::class,'logout']);
Route::get('show/category', [ProdectController::class,'showCategory']);
Route::get('show/Prodects/{id}', [ProdectController::class,'showProdects']);
Route::get('show/ProdectDetails/{id}', [ProdectController::class,'showProdectSize']);
Route::post('Add/ToCart/{id}', [ProdectController::class,'AddToCart']);
