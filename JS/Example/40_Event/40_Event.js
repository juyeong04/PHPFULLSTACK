// '인라인' 이벤트 등록
    //html 파일 11행, 13행 참조
    // onclick

    // 프로퍼티 리스너 : 최근들어 잘 사용 안함
    const btn1 = document.querySelector('#btn1');
    btn1.onclick = function() {
        location.href = "http://www.google.com";
    }

    // addEventListener(eventType, function ) 방식 : 대부분 사용
        const btn2 = document.querySelector('#btn2');
        // const btn2 = document.getElementById('btn2');

    // 현재 창에서 열기
        // btn2.addEventListener('click', () => {
        //     location.href = 'http://www.daum.net';
        // }); // ()안에 들어가는 인자(인수) = argument

    // 팝업 새창 띄우기
        let newWindow = null;
        btn2.addEventListener('click', () => {
            newWindow = open('http://www.daum.net', '', 'width=500 height=500');
        });

        const btn3 = document.getElementById('btn3');
        btn3.addEventListener('click', () => {
            newWindow.close();
        });
        // btn3.addEventListener('click', popUpClose(newWindow));


//  이벤트 삭제
    // removeEventListener(eventType, function)
    // : addEventListener()로 등록한 이벤트의 인자와 같은 인자를 셋팅해야 삭제됨
        // btn3.removeEventListener('click', () => {
        //     newWindow.close();
        // }); // ==> 이렇게 만들면 익명함수 다른 함수로 인식해서 동작하지 않음
        // btn3.removeEventListener('click', popUpClose(newWindow));

        function popUpClose(win) {
            win.close();
        }


// 이벤트 타입
    // 1. 마우스 이벤트
        // - mousedown : 마우스가 요소안에서 클릭이 눌릴 때
            // const div1 = document.getElementsByTagName('div'); // getElementsByTagName 는 있는 div요소 전부 가져오기 때문 주의해서 사용!
            // div1[0].addEventListener
            const div1 = document.querySelector('.div1');
            div1.addEventListener('mousedown', () => alert('div1 클릭'));
        
        // - mouseenter : 마우스 포인터가 요소 안으로 진입 했을 떄
            div1.addEventListener('mouseenter', () => alert('div1 집입'));