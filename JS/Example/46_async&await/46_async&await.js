    // function delay() {
    //     const delayTime = Date.now() + 2000;
    //     while(Date.now() <delayTime) {}
    //     console.log('B');
    // }
    // console.log('A');
    // delay();
    // console.log('C'); // 결과 : A (2초 뒤) B C


// 1. 동기처리를 비동기 처리 형태로 만들 수 있음
    // function delay2() {
    //     return new Promise(function(resolve) {
    //         const delayTime = Date.now() + 2000;
    //         while(Date.now() <delayTime) {}
    //         resolve('B');
    //     });
    // }
    // console.log('A');
    // delay2().then(b => console.log(b));
    // console.log('C'); // 결과 : A (2초 뒤 : 스택구조이기 때문에 2초 뒤에 C B가 한꺼번에 나옴) C B



// 2. async로 비동기 처리
    // async function delay3() {
    //     const delayTime = Date.now() + 2000;
    //     while(Date.now() < delayTime) {}
    //     return'B';
    // }

    // console.log('A');
    // delay3().then(b => console.log(b));
    // console.log('C'); // 결과 : A (2초 뒤 : 스택구조이기 때문에 2초 뒤에 C B가 한꺼번에 나옴) C B


// 3. await : async가 붙은 함수안에서만 사용가능
    // function myDelay(ms) {
    //     return new Promise(resolve => setTimeout(resolve, ms));
    // }

    // function getA() {
    //     myDelay(1000);
    //     return 'A';
    // }

    // function getB() {
    //     myDelay(2000);
    //     return 'B';
    // }

    // console.log(getA() + getB()); // 결과 : AB 딜레이 없이 바로 출력, promise 제일 마지막에 실행 => 실행 됐지만 안된것 처럼 보임

    function myDelay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    async function getA() {
        await myDelay(1000);
        return 'A';
    }

    async function getB() {
        await myDelay(2000);
        return 'B';
    }

// getA()
// .then(strA => console.log(strA)); // 1초 뒤 A 출력

    // promise 방식으로 출력
    function getAll1() {
        getA()
        .then(strA => 
            {return getB()
                .then(strB =>console.log( `${strA} : ${strB}`))});
    }

    // async를 이용할 경우
        async function getAll2() {
            const strA = await getA();
            const strB = await getB();

            console.log(`${strA} : ${strB}`);
        }
        
        getAll2();


// 4. 병렬처리 방법
    async function getAll3() {
        Promise.all([getA(), getB()])
        .then(all => console.log(all.join(' : ')));
    }
    
    getAll3; // A는 1초, B는 2초 총 2초만에 A,B 둘다 출력됨 (비동기에서는 3초만에 출력)