<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names Home</title>
</head>
<body>
    <a href="/names">names</a>
    <br><br>
    <a href="{{url('/names');}}">names</a>
    <br><br>
    <a href="{{route('names.index');}}">names</a> {{-- 다른 부분 수정해도 별칭은 수정 안하기 때문에 제대로 찾아감 --}}
</body>
</html>