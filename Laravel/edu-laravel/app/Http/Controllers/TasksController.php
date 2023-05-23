<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * 리소스의 목록 페이지
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Tasks.index!!';
    }

    /**
     * Show the form for creating a new resource.
     * 리소스 생성을 위한 입력 폼 페이지 (글 작성 페이지로 감)
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Tasks.create!!';
    }

    /**
     * Store a newly created resource in storage.
     * 리소스 생성 처리(post)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrOnly = $request->all();
        // $arrOnly = $request->only(['id', 'name']); // all() 써도 됨!
        return "id : ".$arrOnly['id']." name : ".$arrOnly['name'];
        // return "id : ".$request->id." name : ".$request->name; // 이렇게도 가능!!
    }

    /**
     * Display the specified resource.
     * 리소스 조회 페이지(상세 페이지로 이동)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Tasks.show!! : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     * 리소스 수정 폼 페이지 (수정 페이지로 감)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Tasks.edit!! : '.$id;
    }

    /**
     * Update the specified resource in storage.
     * 리소스 수정 처리(글 수정버튼 눌렀을 때 처리)
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // var_dump($request);
        $arrAll = $request->all(); // 사용자가 전달하는 모든 데이터(정보x)를 획득(배열)
        $arrOnly = $request->only(['id', 'name']); // 사용자가 전달한 데이터 중에 해당하는 데이터만 획득(배열)
        $oneGet = $request->get('pw'); // 사용자가 전달한 데이터 중에 해당하는 데이터의 '값'만 획득(배열x)
        
        var_dump($arrAll);
        var_dump($arrOnly);
        var_dump($oneGet);
        
        return 'Tasks.update!! : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Tasks.destroy!! : '.$id;
    }
}
