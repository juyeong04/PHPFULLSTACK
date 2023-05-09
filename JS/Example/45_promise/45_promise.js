// const promise1 = new Promise((resolve, reject) => {
//     const data = true;

//     if(data) {
//         resolve('성공');
//     } else {
//         reject('error');
//     }
// });

// promise1
// .then(data => {console.log(data);}) // 성공적으로 수행했을 때 실행되는 코드 적어주는 곳
// .catch(error => {console.log(error);}) // 실패했을 때 실행되는 코드
// .finally(() => {console.log('파이널리');}) // 성공하든 실패하든 무조건 실행되는 코드


// 함수 등록해서 promise 사용
function myPromise() {
    return new Promise((resolve, reject) => {
        const data = true;

    if(data) {
        resolve('성공');
    } else {
        reject('error');
    }
    })
};

myPromise()
.then(data => {console.log(data);}) // 성공적으로 수행했을 때 실행되는 코드 적어주는 곳
.catch(error => {console.log(error);}) // 실패했을 때 실행되는 코드
.finally(() => {console.log('파이널리');}) // 성공하든 실패하든 무조건 실행되는 코드