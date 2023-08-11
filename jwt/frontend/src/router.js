import { createWebHistory, createRouter } from 'vue-router';
import Main from './components/MainComponent.vue';
import Login from './components/LoginComponent.vue';
import TokenController from './js/TokenController.js';
import Home from './components/HomeComponent.vue';

const configFlg = {
    main: true,
    login: false,
    home: false
};

const beforeAuth = path => (from, to, next) => {
    const isToken = TokenController.getToken();
    const flg = configFlg[path];
    
    if(isToken) {
            if(path == 'login') {
                next('/main');
            }

            return next();
    }else {
        if(flg) {
            next('/login');
        }
            return next();
    }

};
// const beforeAuth = path => (from, to, next) => {
//     const isToken = TokenController.getToken();
//     const flg = configFlg[path];
//     if( isToken && from.path == '/' && to.path == '/login' ) {
//         next('main');
//     }
//     else if( !isToken && from.path == '/' && to.path == '/main') {
//         next('login');
//     }
//     else if (isToken && path == '/login') {
//         next('main');
//     }
//     else if( (flg && isToken) || !flg ) {
//         return next();
//     }else {
//         next('/login');
//     }
// };

const routes = [
	{
		path: "/main",
		name: "main",
		component: Main,
        beforeEnter: beforeAuth('main')
	},
	{
        path: "/login",
		name: "login",
		component: Login,
        beforeEnter: beforeAuth('login')
	},
    {
        path: "/",
		name: "home",
		component: Home,
        beforeEnter: beforeAuth('home')
    }
];

const router = createRouter({
	history: createWebHistory(),
	routes
});

export default router;