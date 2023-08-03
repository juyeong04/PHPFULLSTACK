<?php

use App\Http\Controllers\AuthController;
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
// 인증절차 위해 토큰 발행함(json형태에서 암호화 돼서 보여짐)
Route::get('/token', [AuthController::class, 'issueToken']);
Route::get('/chk', [AuthController::class, 'chk']);
