// 함수


// 함수 선언문
function add( a, b ) {
    return a + b;
}

// 함수 표현식
let add2 = function(a, b) {
    return a + b;
}// add2(4, 6);

// 화살표 함수 : 리턴 값만 있는 경우 한줄로 표현 가능
let test1 = () => "안녕";

// ==> 위와 같은 방식
// function test1() {
//     return "안녕";
// }

let add3 = (a, b) => a + b;

// 익명 함수 : 단독으로 사용불가
// function(a, b) {
//     return a + b;
// }


// Function 생성자 함수 : 잘 안씀
let add4 = Function('a', 'b', 'return a+b;');