// setTimeout(function() {
//     console.log('A');
// }, 3000);

// setTimeout(function() {
//     console.log('B');
// }, 2000);

// setTimeout(function() {
//     console.log('C');
// }, 1000);


// 1. 콜백함수를 이용해서 A,B,C 순서로 콘솔에 출력
// setTimeout(function() {
//     console.log('A');
//         setTimeout(() => {
//         console.log('B');
//             setTimeout(() => {
//                 console.log('C');
//             } , 1000);
//         }, 2000);
// }, 3000);

// 2. promise를 이용해서 A,B,C 순서로 콘솔에 출력 
// function f1() {
//     return new Promise((resolve) => {
//         setTimeout(() => {
//             console.log('A');
//             resolve();
//         }, 3000);
//     })
// }

// function f2() {
//     return new Promise((resolve) => {
//         setTimeout(() => {
//             console.log('B');
//             resolve();
//         }, 2000);
//     })
// }

// function f3() {
//     return new Promise((resolve) => {
//         setTimeout(() => {
//             console.log('C');
//             resolve();
//         }, 3000);
//     })
// }

// f1()
// .then(f2)
// .then(f3);

function myPromise(ms, value) {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve(console.log(value));
        }, ms);
    })
}

myPromise(3000, 'A')
.then(() => myPromise(2000,'B'))
.then(() => myPromise(1000, 'C'));