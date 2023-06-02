@extends('layout.layout') 
{{--? view 파일 밖에 있으면 경로 어케 적지??????????? --}}

@section('title', 'login')

@section('contents')
    @include('layout.errors')
    <form action="{{route('user.loginpost')}}" method="post">
        @csrf
        {{-- 토큰 생성 필요하면 생성하는 것도 적어줘야함 --}}
        <label for="email">이메일</label>
        <input type="text" id="email" name="email">
        <br>
        <label for="password">비밀번호</label>
        <input type="text" id="password" name="password">
        <br>
        <button type="submit">로그인</button>
    </form>
@endsection

{{--** tdd : 테스트 주도 개발(테스트 코드 작성->문제없으면 그 다음 코드에 적용-> 반복)버그 발생 가능성 줄어듬, 하지만 현장에서는 잘 안함, 테스트 코드 작성할수 있는 개발자가 많지 않음 --}}