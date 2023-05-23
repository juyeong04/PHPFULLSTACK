{{-- @extends : 부모 템플릿 상속 : 세미콜론 xxxxxx --}}
@extends('layout.layout')

{{-- @section(키값, 내용) : 부모 템플릿에 해당하는 yield 부분에 자리를 차지 --}}
@section('title', '자식 타이틀')

{{-- @section ~ @endsection : 처리해야하는 코드가 많을 경우, @section ~ @endsection 에 소스코드를 기재 --}}
@section('contents')
    <h2>contents section임</h2>
    <p>ㅏㅏㅏㅏㅏㅏㅏㅏㅏ</p>
    <p>콘텐츠 끝</p>
@endsection

@section('test')
    <h2> 자식 섹션 </h2>
    <p>pppppppppppp</p>
@endsection


{{-- 상속받은 템플릿 제일 나중에 실행 /조건문에 먼저 실행되고 -> 상속 실행됨 ==> section해주기!!!--}}
{{-- 조건문 --}}
@section('if')
<hr>
<h5>IF</h5>
@if($data['gender'] === '남자')
    <span>남자!</span>
@elseif($data['addr'] === '대구')
    <span>대구!</span>
@else
    <span>모든 조건 탈락</span>
@endif
@endsection

{{-- 반복문 --}}
@section('for')
<hr>
<h5>FOR</h5>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

{{--  foreach와 forelse의 경우, $loop변수가 자동 생성됨 --}}
@section('foreach')
<hr>
<h5>FOREACH</h5>
    @foreach($data as $key => $val)
        <span>{{$loop->count.' >> '.$loop->iteration.'    '}}</span>
        <span>{{$key.' : '.$val}}</span>
        <br>
    @endforeach
@endsection

@section('forelse')
    <hr>
    <h5>FORELSE</h5>
    @forelse($data2 as $key => $val)
        <span>{{$key.' : '.$val}}</span>
    @empty
        <span>빈배열!</span>
    @endforelse
@endsection