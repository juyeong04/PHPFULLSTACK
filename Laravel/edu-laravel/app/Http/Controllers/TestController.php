<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
            return view('mytest')->with('name', '미스터 존'); // with(=헬퍼 함수) : 다이나믹프로퍼티처럼 사용가능
    }
}
