// import './bootstrap';

import {createApp} from 'vue'
import {createRouter, createWebHashHistory} from 'vue-router'

import App from './components/App.vue'
import PokemonList from "./components/pokemon/PokemonList.vue";
// import UserCreateForm from "./components/pokemon/UserCreateForm.vue";
// import UserEditForm from "./components/pokemon/UserEditForm.vue";

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: '/',
            component: PokemonList
        },

        // {
        //     name: 'listPokemon',
        //     path: '/perfomance',
        //     component: PokemonList
        // },
        // {
        //     name: 'createUser',
        //     path: '/pokemon/create',
        //     component: UserCreateForm
        // },
        // {
        //     name: 'editUser',
        //     path: '/pokemon/:id',
        //     component: UserEditForm
        // },

    ],
})

createApp(App).use(router).mount('#app')
