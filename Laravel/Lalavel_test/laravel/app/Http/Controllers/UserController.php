<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{
    public function login() {
        return view('login');
    }

    public function loginpost(Request $req) { //request: 유저가 보내는 정보 모두 가져옴(브라우져 정보 등등)
        Log::debug("Login Start", $req->only('email', 'password'));
        //! 유저한테 데이터 받으면 ==> 유효성 검사!!!!!!
        
        Log::debug("Validator start"); // 처리시간 검사할때도 log 사용함, start-end 사용
        // 유효성 검사
        $validate = Validator::make($req->only('email', 'password'), [
            // TODO 정규식 넣어야함 원래
            'email' => 'required|email|max:30'
            ,'password' => 'required|max:30|min:3'
        ]);

        Log::debug("Validator end");

        if($validate->fails()) {
            Log::debug("Validator fails Start");

            return redirect()->back()->withErrors($validate);
        }

        // 유저 정보 습득
        $user = DB::select('select id, email, password from users where email = ?', [
            $req->email
        ]);

        // Log::debug("Select user", [$user[0]]); //? $user 어케 돼있는거지???????????????
        //! $user pdo 가져올때랑 배열 똑같음
        // if(!$user || !Hash::check($req->password,  $user[0]->password)) {
            if(!$user || $req->password !== $user[0]->password) {
                return redirect()->back()->withErrors(("이메일과 비밀번호를 확인해주세요")); // withErrors : 따로 안만들고 배열로 안에 넣어서 보낼수 있음(배열 안넣고 문자열만 넣어도 자체적으로 배열로 변경해서 넣어줌!!)
            }
            Log::debug("Select user", [$user[0]]);
            
        // 유저 인증 작업
        Auth::loginUsingId($user[0]->id); // Auth::login()은 엘로퀀트에서만 쓸 수 있음
        if(!Auth::check()) {
            session($user[0]->id);
            Log::debug('유저인증 NG', [session()->all()]);
            return redirect()->back()->withErrors(("인증처리 에러"));
        }
        else {
            Log::debug("유저인증 ok");
            return redirect('/');
        }

        return redirect()->back();
    }
}
