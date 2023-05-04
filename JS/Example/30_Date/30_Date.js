// Date
    const NOW = new Date('2023-04-30 15:20:30.123');

// getFullYear() : '연도'만 가져오는 메소드
    console.log(NOW.getFullYear() + "년");

// getMonth() : '월'을 가져오는 메소드 (0~12 숫자 가져오기 때문에 +1 해줘야함)
    console.log((NOW.getMonth() +1) + "월");

// getDate() : '날짜'를 가져오는 메소드
    console.log(NOW.getDate() + "일");

// getDay() : '요일'를 가져오는 메소드 (숫자 반환)
    console.log("요일 : " + NOW.getDay()); // 일요일 : 0, 토요일 : 6

// getTime() : 1970/01/01 기준으로 몇초가 지났는지 '밀리초'를 가져옴
    console.log("시간 : " + NOW.getTime());

// getHours() : '시'를 가져오는 메소드
    console.log(NOW.getHours() + "시");

// getMinutes() : '분'을 가져오는 메소드
    console.log(NOW.getMinutes() + "분");

// getSeconds() : '초'를 가져오는 메소드
    console.log(NOW.getSeconds() + "초");

// getMilliseconds() : '밀리초'를 가져오는 메소드
    console.log(NOW.getMilliseconds() +" ms");



    // 기준일 : 2022년 9월 30일 19시 20분 10초
    // 오늘 부터 며칠 전인지 출력
        const nowTime = new Date();
        const pastTime = new Date('2022-09-30 19:20:10');
        // console.log((nowTime.getTime() - pastTime.getTime())/86400*0.001)
        console.log(Math.ceil((nowTime-pastTime)/86400*0.001) + " 일");
        //ceil, floor(지금 날짜는 포함하고 싶지 않을때)
