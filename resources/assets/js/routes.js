const router = new VueRouter();

router.map({
    '/': {
        name: 'home',
        component: require('./components/home.vue')
    },
    '/show': {
        name: 'show',
        component: require('./components/show.vue')
    },
    'home/update/:no': {
        name: 'update',
        component: require('./components/update.vue')
    },
    // '/': {
    //     name: 'login',
    //     component: require('./components/login.vue')
    // },
    '/course/act': {
        name: 'act-course',
        component: require('./components/ACT.vue')
    },
    '/course/sat': {
        name: 'sat-course',
        component: require('./components/SAT.vue')
    },
    '*': {
        name: 'not-found',
        component: require('./components/404.vue')
    },
});

var App = Vue.extend({});

router.start(App, '#app');