<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiUserController;

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

Route::get('/users/{email}', [ApiUserController::class, 'userget']); //유저가 세그먼트파라미터 값 알고 있나 생각해야됨!, id값은 내부적으로 사용하는 pk이기 때문에 유저가 알수없음
//유저 정보 함부로 주면 안됨 ==> 인증된 유저한테만 줘야됨 /토큰 먼저 확인하고 맞으면 -> 유저 정보 줌
Route::post('/users', [ApiUserController::class, 'userpost']);
Route::put('/users/{email}', [ApiUserController::class, 'userput']);
Route::delete('/users/{email}', [ApiUserController::class, 'userdelete']);
