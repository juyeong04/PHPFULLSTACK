//-------------------
// 기본 데이터 타입
//-------------------

// 숫자 (number)
    let num = 1;

// 문자열 (string)
    let str = "안녕";

// 불리언 (boolean)
    let bool = true;

// null
    let test1 = null;

// undefined
    let test2;

// 심볼 (symbol) : class 임
    const S_CONST1 = Symbol("심볼");
    const S_CONST2 = Symbol("심볼");
    // S_CONST1 === S_CONST2 는 false, 하나의 심볼은 하나의 값을 가짐


//------------------------
// 객체 타입 (JSON) (기본 타입 제외 모든 타입) : 객체 표현할때 {} 사용
//------------------------
    let obj1 = {
        u_name: "홍길동" // 속성, '홍길동'만 뽑으려면 obj1.u_name; 사용해서 출력(php 연상배열과 비슷)
        ,u_age: 30
        ,u_gender:"남자"
        ,test: function() {
            console.log("객체 함수 test");
        }//객체 안에 함수
        ,addr:{
            addr1: "대구"
            ,addr2: "중구"
        }// 객체 안에 객체
    }

    // 배열(Array)
        let arr = ["탕수육", "짜장면", "짬뽕"];