import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/vue',
        name: 'list',
        component: () => import('./components/List.vue')
    },
    {
        path: '/vue/add',
        name: 'add',
        component: () => import('./components/Save.vue')
    },
    {
        path: '/vue/save/:slug?',
        name: 'edit',
        component: () => import('./components/Save.vue')
    },
    {
        path: '/vue/show/:slug',
        name: 'show',
        component: () => import('./components/Show.vue')
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router;