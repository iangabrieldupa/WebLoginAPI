<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\InvestmentController;
use App\Http\Controllers\API\PostInvestmentController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [InvestmentController::class, 'login']);
Route::post('register', [InvestmentController::class, 'register']);
Route::post('investment', [InvestmentController::class, 'investment']);
Route::get('get-account-name', [PostInvestmentController::class, 'getAccountName']);
Route::get('get-all-posts', [PostInvestmentController::class, 'getAllPosts']);
Route::get('get-post', [PostInvestmentController::class, 'getPost']);
Route::get('search-post', [PostInvestmentController::class, 'searchPost']);