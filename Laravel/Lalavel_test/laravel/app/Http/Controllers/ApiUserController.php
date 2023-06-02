<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApiUserController extends Controller
{
    public function userget($email) {
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $user = DB::select('select name, email from users where email = ?', [$email]);
        
        if($user) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Get User';
            $arr['data'] = $user[0];
        }
        else {
            $arr['code'] = 'E01';
            $arr['msg'] = 'No Data';
        }

        // return $user[0];
        return $arr;
    }

    public function userpost(Request $req) {
        // Todo 동적으로 움직일 수 있게 만들어줘야함!!!!!
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $result = DB::insert('insert into users(name, email, password) values(?, ?, ?)'
            ,[
                $req->name
                ,$req->email
                ,Hash::make($req->password)
            ]);
        if($result) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Registration';
            $arr['data'] = [$req->email];
        }
        else {
            $arr['code'] = 'E01';
            $arr['msg'] = 'Failed Registration';
        }
        return $arr;
}

    public function userput(Request $req, $email) {
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $result = DB::update('update users set name = ? where email = ?'
            ,[
                $req->name
                ,$email
            ]);
        if($result) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success update';
            $arr['data'] = [$req->name];
        }
        else {
            $arr['code'] = 'E01';
            $arr['msg'] = 'Failed update';
        }
        return $arr;
}
    

    public function userdelete($email) {
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $date = Carbon::now();
        $result = DB::update('update users set deleted_at = ?, delete_flg = ? where email = ?'
            ,[
                $date
                ,'1'
                ,$email
            ]);

        if($result) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Delete';
            $arr['data'] = ['deleted_at' => $date, 'email' => $email];
        }
        else {
            $arr['code'] = 'E01';
            $arr['msg'] = 'Failed Delete';
        }
        return $arr;
    }
}
