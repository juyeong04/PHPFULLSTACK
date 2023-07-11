// ----------------------
// 모든 데이터 여기 저장!!
// ----------------------

import { createStore } from 'vuex'

const store = createStore ({
    state() { // 데이터 정의
        return {
            test: '테스트용',
        }
    },
})

export default store