<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    protected $obj_jwt;

    public function __construct()
    {
        $this->obj_jwt = new JWT();    
    }

    // JWT 토큰 생성

    function issueToken(Request $req) {
        Log::debug("--------- issueToken Start -----------");
        Log::debug("id", $req->only('id'));

        // 아이디, 패스워드 유효성 체크 해야됨

        // db에서 유저 검색

        // JWT 생성
        // Lib > JWT.php
        $token = $this->obj_jwt->createJWT($req->only('id'));// $req->only() 배열로 넘어옴
        Log::debug("token : ". $token);
        Log::debug("--------- issueToken End -----------");
        $res = [
            'errflg' => '0',
            'token' => $token
        ];
        return response(json_encode($res), 200);
    }

    // 토큰 검증용

    public function chk(Request $req) {
        $token = $req->header('Authorization');
        $res = [
            'errflg' => '0',
            'msg' => 'OK'
        ];
        $status = 200;
        if(!($this->obj_jwt->chkToken($token))) {
            $res = [
                'errflg' => '1',
                'msg' => 'unAuthorization'
            ];
            $status = 401;
        }
        
        return response(json_encode($res), $status);
    }
}
