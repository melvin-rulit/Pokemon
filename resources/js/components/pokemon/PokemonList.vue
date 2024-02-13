<template>
                                        <!--  Передаем в компонент Modal selectedPerfomanceId   -->
    <Modal v-if="showModal" @close="closeModal" :pokemonId="Number(selectedPokemonId)" />

    <div class="sm:px-6 w-full">
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
            <h3 class="text-4xl font-extrabold dark:text-white">List of Pokemons</h3>
            <div class="mt-7 overflow-x-auto">

                <table class="w-full whitespace-nowrap">
                    <thead class="bg-gray-100">
                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                        <td class="">
                            <div class="flex items-center pl-5">
                                <p class="text-base font-medium leading-none text-gray-700 mr-2">Name</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">Url</p>
                            </div>
                        </td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-for="pokemon of pokemons" :key=pokemons.name tabindex="0"
                        @click="getShowModal(pokemon.url)"
                        class="focus:outline-none h-16 border border-gray-100 rounded cursor-pointer hover:bg-blue-100">
                        <td class="">
                            <div class="flex items-center pl-5">
                                <p class="text-base font-medium leading-none text-gray-700 mr-2">{{ pokemon.name }}</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ pokemon.url }}</p>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>

</template>

<script>
import {PokemonService} from "../../services/PokemonService";
import Modal from "../instruments/Modal.vue";

export default {

    name: "PokemonList",
    components: {Modal},

    data: function () {
        return {
            pokemons: [],
            showModal: false,
            selectedPokemonId: '',
            errorMessage: ''
        }
    },
    created: async function () {
        this.update()
    },
    methods: {
        update: function () {
            this.loading = true;
            PokemonService.getPokemons()
                .then(response => this.pokemons = response.data.results)
                .catch(error => this.errorMessage = error)
        },
        pull_outPokemonId: function (url) {
            let splitUrl = url.split('/').map(part => part.trim());
            let pokemonId = splitUrl[splitUrl.length - 2];
            this.selectedPokemonId = pokemonId;
        },

        getShowModal: function (url) {
            this.pull_outPokemonId(url)
            this.showModal = true;
        },
        closeModal() {
            this.selectedPokemonId = '';
            this.showModal = false;
        },

    },


}
</script>
