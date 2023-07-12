// ----------------------
// 모든 데이터 여기 저장!!
// ----------------------

import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore ({
    state() { // 데이터 저장하는 영역
        return {
            boardData: [], // 게시글 데이터
            lastId: '', // 가장 마지막에 로드된 게시물의 id
            addBtnFlg: true, // 더보기 버튼 표시용 flg
            tabFlg: 0, // 탭 ui flg(0: 메인, 1:필터, 2:작성)
            imgUrl: '',
            filter: '', // 필터명
            // createContent: '', //글 작성
            imgFile: null, // 이미지 파일 객체

        }
    },
    mutations: { // 일반적인 함수들 데이터
        // 초기 데이터 셋팅용
        createBoardData(state, data) { // state는 위에 state() 가리킴
            state.boardData = data;
            this.commit('changeLastId', data[data.length-1].id);
        },
        // 더보기 데이터 셋팅용
        addBoardData(state, data) {
            // 객체 1개만 옴
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // 작성 글 데이터 셋팅용
        addWriteData(state, data) {
            state.boardData.unshift(data); // 배열에 첫번째 방에다가 데이터 넣음
        },
        // lastId 변경
        changeLastId(state, id) {
            state.lastId = id;
        },
        // 탭 ui flg 변경
        changeTabFlg(state, num) {
            state.tabFlg = num;
        },
        // 이미지 URL 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },
        // 필터명 변경
        changeFilter(state, filter) {
            state.filter = filter;
        },
        // 초기화
        clearState(state) {
            state.filter = '';
            state.imgUrl = '';
            state.imgFile = null;
        },
        // 글 업로드 이미지 파일
        uploadImgFile(state, imgFile) {
            state.imgFile = imgFile;
        }
        

    },
    actions: { // ajax 통신같은 데이터
        getMainList(context) { //파라미터 아무 이름이나 상관 없음
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                // console.log(res.data);
                context.commit('createBoardData', res.data); // mutations에 있는 데이터 불러짐
            })
        },

        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data){ // 데이터 없으면 '더보기' 안되게
                    context.commit('addBoardData', res.data);
                } else {
                    context.state.addBtnFlg = false;
                    alert('데이터 없음')
                }
            })
            .catch( err => {
                console.log(err);
            })
        },

        // 글 업로드
        writeContent(context) {
            let content = document.getElementById('content');
            const data = {
                name: '김주영',
                filter: context.state.filter,
                img: context.state.imgFile,
                // content: context.state.createContent,
                content: content.value,
            };
            const header = {
                headers: {
                    'Content-Type' : 'multipart/form-data',
                }
            };
            axios.post('http://192.168.0.66/api/boards', data, header)
            .then(res => {
                // 처리처리
                // console.log(res);
                context.commit('addWriteData', res.data); // 리스트 내가 올린거 추가
                // window.location.reload(true); //새로고침
                context.commit('changeTabFlg',0);// 메인으로 이동
                context.commit('clearState'); // 초기화

            })
            .catch(err => {
                console.log(err);
            })
        },
    }
})

export default store