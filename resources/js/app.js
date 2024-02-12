// import './bootstrap';

import {createApp} from 'vue'
import {createRouter, createWebHashHistory} from 'vue-router'

import App from './components/App.vue'
import UsersList from "./components/users/UsersList.vue";
import UserCreateForm from "./components/users/UserCreateForm.vue";
import UserEditForm from "./components/users/UserEditForm.vue";

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: '/',
            component: UsersList
        },

        {
            name: 'listUsers',
            path: '/perfomance',
            component: UsersList
        },
        {
            name: 'createUser',
            path: '/users/create',
            component: UserCreateForm
        },
        {
            name: 'editUser',
            path: '/users/:id',
            component: UserEditForm
        },

    ],
})

createApp(App).use(router).mount('#app')
