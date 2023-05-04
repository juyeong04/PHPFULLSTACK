let arr = [1, 2, 3, 4, 5];

// push() 메소드 : 배열에 값 '추가'
    // $arr[] = 1; ==> PHP array 값 추가하는 방법

    arr.push(6);
    // arr[12] = 11; 권장하지 않음, 제어하기 어려움 중간에 값 없는 방 생성됨!

// delete : 배열의 값 '삭제'
    delete arr[5]; // 5번방 값 삭제 but index(방번호)는 남아있음 ==> empty로 표시됨, 배열 길이는 index 남아있기 때문에 empty포함해서 계산함

// splice(index, 몇개까지 삭제할지, 변경할 것) 메소드 : 배열의 요소를 '삭제' 또는 '교체'
    arr = [1, 2, 3, 4, 5];
    arr.splice(2,1); // 배열에서 arr[2]가 삭제
    arr.splice(2, 0, 3); // 배열의 arr[2]에 값 3을 추가
    arr.splice(2, 1, 3); // 배열의 arr[2]의 값을 3으로 변경
    arr.splice(arr.length, 0, 6, 7, 8); //3번째 매개변수 부터는 가변파라미터로 모든 값을 추가(뒤에 여러개 추가 가능)


// length : 배열의 길이 계산(property)
    arr.length

// indexOf 메소드 : 배열에서 특정 요소를 찾는데 사용 ==> index 번호 출력 / 없는 값이면 -1 출력
    let arr2 = [1, 2, 3, 4, 5];
    // arr.indexOf(1); ==> 0

// lastIndexOf() 메소드 : 배열에서 가장 마지막 위치의 특정요소를 찾는데 사용
    arr2 = [1, 2, 3, 4, 3, 5, 6, 6, 1]; // 1값 indexOf로 찾으면 0 반환 (찾고 끝남)

//slice() 메소드 : 음수, 양수 가능
// 양수 : (0터 시작, 잘라서 날리고 싶은 index)
// 음수 : (표시하고 싶은 자리수까지, 잘라서 날리고 싶은 자리수)
    // 예제
    let fileName = 'javaScript.log.php';
    // fileName = 'ttt.aa.b';
    //콘솔에 출력하기
    //javaScript : fileName.slice(0,10) / fileName.slice(0, firstDot)
    //log : flieName.slice(-7, -4) / fileName.slice(firstDot+1, lastDot)
    //php : fileName.slice(-3) / fileName.slice(lastDot+1)
    let firstDot = fileName.indexOf('.');
    let lastDot = fileName.lastIndexOf('.');
    let firstStr = fileName.slice(0, firstDot);
    let midStr = fileName.slice(firstDot+1, lastDot);
    let lastStr = fileName.slice(lastDot+1);
    // let lastStr = fileName.slice(-(fileName.length-(lastDot+1)));
    // console.log(firstStr);
    // console.log(midStr);
    // console.log(lastStr);


// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새배열을 반환
    let arrCon1 = [1, 2, 3];
    let arrCon2 = [10, 20, 30];
    let arrCon4 = [100, 200, 300];
    let arrCon3 = arrCon1.concat( arrCon2, arrCon4 );
    // console.log( arrCon3 );


// includes()메소드 : 배열이 특정요소를 가지고 있는지 '판별'(true, false)
    let arrInc = [1, 2, 3, 4];
    // console.log(arrInc.includes( 7 ));


// sort() 메소드 : 배열의 요소를 '아스키코드'로 정렬해서 반환 / 숫자지만 문자열로 인식, 제일 앞글자만 정렬
    const arrSort = [6, 5, 3, 7, 2, 9, 6, 1, 12, 354, 756];
    arrSort.sort(); // 이렇게 출력됨 
    
    [1, 12, 2, 3, 354, 5, 6, 6, 7, 756, 9]
    // 오름차순 정렬
    arrSort.sort(
        function(a, b) {
            return a-b; // 음수일때 그대로
            // return b-a; 내림차순 정렬 
        }
    );
    arrSort.sort((a,b) => a-b);// 오름차순 정렬
    arrSort.sort((a,b) => b-a);// 내림차순 정렬


// join() 메소드 : 배열의 모든 요소를 '연결'해서 '하나의 문자열'을 만들어 줌
    const arrJoin = ["안녕", "하세", "요"];
    arrJoin.join() //'안녕,하세,요'
    arrJoin.join('') //'안녕하세요'
    arrJoin.join('/') //'안녕/하세/요'

// every() 메소드 : 배열의 '모든'요소들이 주어진 함수를 통과하는 지 판별
    let arrEvery = [1, 2, 3, 4, 5];
    let result = arrEvery.every( function( val ) {
                                    return val <= 5;
                                });
    // console.log(result);

    // 모든 요소의 2로 나눈 나머지가 0인지 판별해주세요

        // arrEvery = [2, 4];
        // let devide = arrEvery.every(function(val) {
        //     return val % 2 === 0;
        // })
        let devide = arrEvery.every((val) => val % 2 === 0);
        // console.log(devide);


// some() 메소드 : 배열 안에 '어떤' 요소라도 주어진 함수를 통과하는지 판별
    const arrSome = [1, 2, 3, 4, 5];
    let result2 = arrSome.some(val=> val >= 5);
    console.log(result2); // true


// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 '새로운 배열'로 반환
    const arrFilter = [1, 2, 3, 4, 5];
    let result3 = arrFilter.filter(val => val >= 3);
    console.log(result3); //[3, 4, 5]

