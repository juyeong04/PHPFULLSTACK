// console.log("안녕하세요", "js 파일", "두번째");

// --------------------
// 변수 사용
// --------------------

// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
    // // 중복 선언 가능
    // var u_name = "홍길동"; 
    // var u_name = "갑순이"; 
    // // 재할당 가능
    // u_name = "갑돌이";
    // console.log( u_name );

// let : 중복선언 불가능(같은 스코프 레벨에서만), 재할당 가능, 블록레벨 스코프
    // let u_age = 20;
    // // let u_age = 30; 불가능!
    // u_age = 30;

// const 상수 : 중복선언 불가능, 재할당 불가능, 블록레벨 스코프
    // const gender = "남자";
    // gender = "여자";


// ---------------------------
// 스코프
// ---------------------------

// 전역 스코프 : 조심해서 사용! 네이밍 확실하게 하기! 어디서든 접근 가능(되도록 사용하지 말기, 에러 빈번 발생 원인)
    let u_name = "홍길동";

// 함수 레벨 스코프 : 함수 내에서만 접근 가능한 변수
    function test() {
        console.log( u_name );
        let u_age = 30;
        console.log( u_age );
    }

// 블록 레벨 스코프 : 블록{} 안에서만 선언된 변수는 그 안에서만 사용가능
    function test1() {
        if( true ) {

            let v_test1 = "함수 테스트1"; // 출력 불가능(블록 레벨)
            var v_var1 = "var로 선언"; // 출력 가능(함수 레벨)
        }
        // console.log( v_test1 );
        console.log( v_var1 );
    }
    function test1() {
        let v_test1 = "함수 테스트1"; // 출력 가능, 같은 블록안에 있으니까
        if( true ) {
            var v_var1 = "var로 선언";
        }
        // console.log( v_test1 );
        console.log( v_var1 );
    }



//---------------------
// 호이스팅(hoisting) : 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
//---------------------
//(인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어올리는 것
    console.log( hTest() ); // 쓰려는 함수 끌어올려서 '출력'됨
    console.log( varTest ); // var로 선언한 변수는 값은 세팅 안되고 일단 'undefined'로 설정됨
    console.log( letTest ); // let으로 선언한 변수는 끌어올려지지만, undefined로 초기화 설정 안돼서 'error'남
    console.log( constTest ); // let과 동일

    function hTest() {
        return "함수 : hTest";
    }

    var varTest = "var : var 변수";

    let letTest = "let 변수";
    const constTest = "const 상수";
