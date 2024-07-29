import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {path: '/', component: () => import('./components/Course.vue'), name: 'course.index'},
    {path: '/about', component: () => import('./components/About.vue'), name: 'about.index'},
]

const router = createRouter({
    history: createWebHistory(),
    linkActiveClass: 'active',
    routes,
});

export default router;
