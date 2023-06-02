// 1. 요소 선택하기
    // 1-1. 'ID'로 선택하는 방법
        const title = document.getElementById('title');
        //title.style.color = 'blue';

    // 1-2. '태그명'으로 요소를 선택하는 방법
        const li = document.getElementsByTagName('li');
        // 탕수육은 노랑, 짭뽕은 빨강
        li[1].style.color = "orange";
        li[2].style.color="red";

            // 탕수육, 볶음밥, 깐풍기 배경색상 오렌지색
            // 짜장면, 짬봉, 라조기 배경색상 베이지색
            // let num = li.length;
            // for(i = 0; i < num; i++) {
            //     // li[0].style.backgroundColor = "beige";
            //     // let odd = (2*i)-1;
            //     // let even = 2*i;
            //     // li[odd].style.backgroundColor = "orange";
            //     // li[even].style.backgroundColor = "beige";
            //     // 없는 방번호에는 컬러 줄수 없음..!
            //     if(i%2 ===0) {
            //         li[i].style.backgroundColor = "orange";
            //     }
            //     else {
            //         li[i].style.backgroundColor = "beige";
            //     }
                
            // }

    // 1-3. '클래스명'으로 요소를 선택하는 방법
        const noneli = document.getElementsByClassName('none-li');

    // 1-4. CSS 선택자로 요소를 선택하는 방법 
        //querySelector() : 복수의 요소 있으면, 상위 1개만 가져옴)
            const title2 = document.querySelector('#title');
            const li2 = document.querySelector('.none-li'); // class 제일 위에 1개만 가져옴!
        
        //querySelectorAll() : 복수 요소 전체 선택
        const li3 = document.querySelectorAll('.none-li');



//-------------------------------------------------------------------------

// 2. 요소 조작하기
    // 2-1. 콘텐츠를 조작하는 방법
        // textContent : 순수한 텍스트 데이터 전달, 이전 태그들 모두 제거
            title.textContent = '<span>야호</span>';

        // innerHTML : 태그는 태그로 인식해서 전달, 이전 태그들 모두 제거
            title.innerHTML = '<span>inner</span>';
            // const it = document.querySelector('#it');


        // 요소의 속성을 추가
            const it = document.getElementById('it');
            // it.setAttribute('placeholder','셋 어트리뷰트로 삽입');

            const aa = document.getElementById('aa');
            aa.setAttribute('href', "http://www.naver.com");

        
        // 요소의 속성을 제거
            it.removeAttribute('placeholder');

        // 요소의 스타일링
        // 1. 인라인으로 스타일 추가
            // aa.style.textDecoration = 'none';

        // 2. class로 스타일 추가(주로 사용!!)
            aa.classList.add('aa1','aa2','aa3');


//--------------------------------------------------------------------------

// 3. 새로운 요소 만들기
    // createElement() : 요소 만들기
    const cli = document.createElement('li');
    cli.innerHTML ='야끼우동';

    // appendChild() : 요소를 자식요소의 가장 마지막에 삽입
    const ul = document.getElementsByTagName('ul');
    // ul[0].appendChild(cli);

    // 요소를 특정 위치에 삽입하는 방법
    // 1. const check = document.querySelector('#check')
    //2. li[2]
    //3. document.querySelector('li:nth-child(3)');
    const zzam = document.querySelector('li:nth-child(3)');
    ul[0].insertBefore(cli, zzam); // 짬뽕 전에 야끼우동이 삽입

    // 해당 요소를 지우는 방법
    // cli.remove();


        // [예제]
        // 라조기 깐풍기 사이에 '잡채밥', '동파육'을 순서대로 넣고,
        // 배경 색깔 넣은것도 제대로 나오게 수정

            const jap = document.createElement('li');
            jap.innerHTML = '잡채밥';
            const dong = document.createElement('li');
            dong.innerHTML = '동파육';
            const ggan = document.querySelector('li:nth-child(7)');
            ul[0].insertBefore(jap, ggan);
            ul[0].insertBefore(dong, ggan);
            let num = li.length;
            for(i = 0; i < num; i++) {
                if(i%2 ===0) {
                    li[i].style.backgroundColor = "orange";
                }
                else {
                    li[i].style.backgroundColor = "beige";
                }
                
            }
            
        