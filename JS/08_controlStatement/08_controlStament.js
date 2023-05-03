// 제어문

//----------------------
// 조건문(if, switch)
//----------------------

    if( 1 > 0 ) {
        console.log("1은 0보다 크다");
    }else if( 1 < 0 ) {
        console.log("1은 0보다 작다");
    }else {
        console.log("기타 등등");
    }

    let u_age = 30;
    switch ( u_age ) {
        case 20:
            console.log("20살");
            break;
    
        default:
            console.log(u_age + "살");
            break;
    }

//-------------------------------
// 반복문 ( for, while, do_while, foreach, for...in, for...of )
//--------------------------------
    // let num = 0;
    // while( num <= 3 ) {
    //     console.log(num);
    //     num++;
    // }

    let dan = 2;
    // let num = 1;
    // do {
    //     // 2단 구구단
    //     console.log(dan + " * " + num + " = " + (dan*num)) // 문자열 연결은 +로 연결!!
    //     num++;
    // } while (num <= 9);

    // for( let i = 1; i <= 9; i++ ) {
    //     console.log(dan + " * " + i + " = " + (dan*i))
    // }

// foreach '배열'에서만 사용 가능
    let arr = [1, 2, 3, 4];
    // arr.forEach( function(val) {
    //     console.log(val);
    // }
    // )
    // arr.forEach( function(val, key) { // 앞에 val값, 뒤가 key값
    //         console.log(val + key);
    //     }
    //     )

    // arr = {
    //     u_name: "홍길동"
    //     ,u_age: 0
    // };

// for...in : 모든 객체 루프 가능 (key 값)
    // for( let i in arr ){
    //     console.log(i+ " : " + arr[i]);
    // }

    arr = [5,4,3];
    arr.num = 2; // iterator 부여 된 것만 출력됨 ===> arr.length 값 3 나옴 / num:2 는 iterator 부여 X
// for...of : (val 값)
    for( let i of arr ) {
        console.log(i);
    }