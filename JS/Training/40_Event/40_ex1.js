/* 
    1. 버튼 클릭시 아래 내용의 alert가 나옴
        "안녕하세요 
        숨어있는 div를 찾아보세요"

    2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 alert가 나옴
        "두근두근"

    3. 2번의 영역을 클릭하면 아래의 alert를 출력하고, 배경색이 베이지 색으로 바뀌어 나타남
        "들켰다!"

    4. 3번의 상테에서 다시 한번 더 클륵하면 아래의 alert를 출력하고,
    배경색이 흰색으로 바뀌어 안보이게 됩니다.
        "다시 숨는다"
    
*/

// 버튼 alert
    // let btnAlert = null;
    // let divAlert = null;
    const btn1 = document.querySelector('.btn1');
    btn1.addEventListener('click', () => alert('안녕하세요 \n숨어있는 div를 찾아보세요'));





//두근두근
    const div1 = document.querySelector('.div1');
    // div1.addEventListener('mouseenter', () => alert('두근두근'));

// 들켰다, 배경색 변경 = beige
    // div1.addEventListener('mousedown', function() {
    //     alert('들켰다!');
    //     div1.classList.add('div2');
    // });

        // div1.addEventListener('mouseenter', () => alert('두근두근'));

        function divEnter() {
            alert('두근두근');
        }
        div1.addEventListener('mouseenter', divEnter);
        div1.addEventListener('mousedown', divAlert);

    // 들켰다 function
    function divAlert() {
        alert('들켰다!');
        div1.classList.add('div2');


        div1.removeEventListener('mouseenter', divEnter);
        div1.removeEventListener('mousedown', divAlert);
        div1.addEventListener('mousedown', divHide);

    }

    // 숨는다 function
    function divHide() {
        alert('다시 숨는다');
        div1.classList.remove('div2');
        div1.addEventListener('mouseenter', divEnter);
        div1.removeEventListener('mousedown', divHide);
        div1.addEventListener('mousedown', divAlert);
    };


    




