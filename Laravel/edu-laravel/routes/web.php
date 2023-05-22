<?php
// url 분석해서 컨트롤러로 연결하는 역할

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Request class 써주기위해 사용

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 익명함수 = closure
Route::get('/', function () {
    return view('welcome'); // view > welcome.blade.php 파일 리턴해줌
});


// ---------------------
// 라우트 정의
// ---------------------

    // 문자열 리턴
    Route::get('/hi', function() {
        return '안녕하세요';
    });

    // 뷰 리턴 (resoreces > view에 뷰파일 만들어주기 / .env > 디버그모드 설정 true면 에러 상세정보 출력(false 해주기!))
    Route::get('/myview', function() {
        return view('myview');
    });



// ---------------------
// HTTP 메소드 대응하는 라우터
// ! 여러 라우터에 해당될 경우 '가장 마지막'에 정의된 것이 실행됨
// ---------------------

    Route::get('/home',function() {
        return view('home');
    });

    // 모든 요청에 대한 처리 : 위치에 따라 route가 처리하는게 달라짐!!!! 위 -> 아래 처리
    // Route::any('/method', function () {
    //     return'ANY Method';
    // });

    // GET 요청에 대한 처리
    Route::get('/method', function() {
        return 'GET Method';
    });

    // POST 요청에 대한 처리 : 기존 데이터를 insert
    Route::post('/method', function() {
        return 'POST Method';
    });

    // PUT 요청에 대한 처리 : 기존 데이터를 update
    Route::put('/method', function() {
        return 'PUT Method';
    });

    // DELETE 요청에 대한 처리
    Route::delete('/method', function() {
        return 'DELETE Method';
    });

    // 모든 요청에 대한 처리
    Route::any('/method', function () {
        return'ANY Method';
    });

    // 특정 여러 메소드 요청에 대한 처리
    Route::match(['get', 'post'], '/method', function() {
        return 'MATCH Method';
    });


// ---------------------
// 라우트에서 파라미터 제어
// ---------------------

    // 퀴리 스트링으로 파라미터 획득
    Route::get('/query', function(Request $request) { // Request : 타입 힌트(class형태)
        return $request->id.", ".$request->name;
    });
        // http://localhost/query?id=admin&name=kim ==> admin, kim 리턴해줌
        // & 해서 없는 값 적었을 때 ==> id, name 만 출력됨/ 에러 뜨진 않음!

    // URL 새그먼트 지정 파라미터(일반적인 서브디렉토리 형태(슬래쉬)로 적어주는거 )
    // 파라미터 빈값 적어주면 404 에러 남
    Route::get('/segment/{id}', function($id) {
        return 'segment ID : '.$id;
    });

    // URL 세그먼트로 지정 파라미터 획득 : 기본값 설정 (프론트랑 Api로 소통할때 자주 씀)
    // Route::get('/segment2/{id?}', function($id = 'base') {
    //     return 'segment2 ID : '.$id;
    // });

    // ! Request로도 세그먼트 파라미터를 획득 가능, 세그먼트 파라미터 없어도 404에러 안남
    // 쿼리 스트링에 빈값 적어도 에러안나고, 빈값으로 출력함
    Route::get('/segment2/{id?}', function(Request $request) {
        return 'segment2 ID : '.$request->id;
    });


// ---------------------
// 라우트의 별칭 지정
// ---------------------
    
    Route::get('/names/home', function() {
        return view('nameshome');
    });

    Route::get('/names', function() {
        return 'name.index!!!';
    })->name('names.index'); // 컨트롤러나 뷰에서 사용할 때 


// ---------------------
// 라우트 매칭 '실패'시 대체 라우트 정의(404 notfount 안뜨게)
// ! 보통 가장 마지막에 정의함
// ---------------------

    Route::fallback(function() {
        return '잘못된 경로로 접속하셨습니다.';
    });


// ---------------------
// 라우트의 그룹 및 공통경로 설정
// ---------------------

    // 공통 경로 
    // 공통으로 middleware 처리 해줘야 할 때, 그룹을 사용함!
    Route::prefix('users')->group(function() {
        Route::get('/login', function() {
            return 'Login!!';
        })->name('users.login');
        Route::get('/logout', function() {
            return 'Logout!!';
        })->name('users.logout');
        Route::get('/regist', function() {
            return 'regist!!';
        })->name('users.regist');
    });


// ---------------------
// 서명 라우터
// ---------------------
use Illuminate\Support\Facades\URL;

    Route::get('/makesign', function() {
        // 일반 url 링크 생성하기 : 403 에러(권한웞음) ==> middleware로 사인 여부를 검사하는데, 서명 생성 안돼있기 때문에 에러뜸!
        $baseUrl = route('signs'); 

        // 서명된 URL 링크 생성하기 : 영원히 안없어짐
        $signURL = URL::signedRoute('signs');

        // 유효기간이 있는 서명된 URL 링크 생성하기 : 정해진 시간만큼만 존재
        $limitSignUrl = URL::temporarySignedRoute('signs', now()->addSecond(10));

        return $baseUrl."<br><br>".$signURL."<br><br>".$limitSignUrl;
    });

    Route::get('/sign', function() {
        return "Sign!!";
    })->name('signs')->middleware('signed');
