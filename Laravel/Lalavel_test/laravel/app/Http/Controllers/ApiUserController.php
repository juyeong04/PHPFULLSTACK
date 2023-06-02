<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiUserController extends Controller
{
    public function userget($email) {
        $user = DB::select('select name, email from users where email = ?', [$email]);
        return $user[0];
    }

    public function userpost(Request $req) {

    }

    public function userput(Request $req, $email) {

    }

    public function userdelete($email) {

    }
}
