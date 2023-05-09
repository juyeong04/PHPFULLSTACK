// 타이머 함수

    // // 1. setTimeout() : 몇초 뒤 출력 / clearTimeout()
    //     const timeout = setTimeout(() => console.log('A'), 2000);

    //     clearTimeout(timeout);

    // // 2. setInterval() : 초마다 반복 출력 / clearInterval()
    //     const myInterval = setInterval(() => console.log('A'), 1000);
    //     clearInterval(myInterval);


    //     // 1~5를 1초마다 콘솔에 출력해주세요
            // let num = 1;
            // const numInterval = setInterval(function() {
            //     console.log(num++)
            //     if(num === 6) { 
            //         clearInterval(numInterval);
            //     }
            // }, 1000);

        // 현재시간 시계 만들기
            const clock = document.querySelector('.now_clock');
            function clockTime(){
                const now = new Date();
                const hours = now.getHours();
                const min = now.getMinutes();
                const sec = now.getSeconds();
                
                clock.innerHTML = (hours<10 ? '0'+hours : hours)  + ":" + (min<10 ? '0'+min : min) + ":" + (sec<10 ? '0'+sec : sec);
            }

            const setClock = setInterval(clockTime, 1000);

            const stopClock = document.querySelector('.stop_btn');

            
            stopClock.addEventListener('click', function() {
                clearInterval(setClock);
            });
            

            



