{{-- $errors 라라벨에서 지원하는 validate error를 담는 '객체'! --}}

@if($errors->any())
    @foreach($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach    
@endif