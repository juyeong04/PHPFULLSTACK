// const url = "https://picsum.photos/v2/list?page=1&limit=5";

// fetch(url)
// .then(res => console.log(res.json()));

// fetch(url)
// .then(res => {return res.json()})
// .then(data => makeList(data))
// .catch(console.log);


// function makeList(data) {
//     data.forEach(item => {
//         console.log(item);
//         const tagImg = document.createElement('img');
//         tagImg.setAttribute('src', item.download_url);
//         document.body.appendChild(tagImg);
//         tagImg.classList.add('img_size');
//     });
// }
function showImg(){
    const url = document.getElementById('in_url').value;
    fetch(url)
    .then(res => {return res.json()})
    .then(data => makeList(data))
    .catch(console.log);
}

function makeList(data) {
    const imgCon = document.getElementById('img_con'); // div 태그
    imgCon.innerHTML = ""; // 기존이미지 삭제
    data.forEach(item => {
        const tagImg = document.createElement('img'); // img 태그 만듦
        tagImg.setAttribute('src', item.download_url); // src 요소 만듦
        imgCon.appendChild(tagImg);
        tagImg.classList.add('img_size');
    });
}

const btn = document.getElementById('btn');
btn.addEventListener('click',showImg);


