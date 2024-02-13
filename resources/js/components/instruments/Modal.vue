<template>
    <div class="modal-shadow">
        <div class="modal_block">


            <span class="modal-title pt-2 text-lg">About pokemon</span>

            <div class="modal-content mt-4">
                <!--                    <TextInput title="Название" v-model:value="pokemonName.na" type="text"/>-->
            </div>
            <!--                <div class="modal-content mt-4">-->
            <!--                    <TextInput title="Код" v-model:value="pokemonName.code" type="text"/>-->
            <!--                </div>-->
            <!--                <div class="modal-content mt-4">-->
            <!--                    <TextInput title="Размерность" v-model:value="pokemonName.unit_of_measure" type="text"/>-->
            <!--                </div>-->
            <!--                <div class="modal-content mt-4">-->
            <!--                    <TextInput title="Период от" v-model:value="pokemonName.period_start" type="text"/>-->
            <!--                </div>-->
            <!--                <div class="modal-content mt-4">-->
            <!--                    <TextInput title="Период до" v-model:value="pokemonName.period_end" type="text"/>-->
            <!--                </div>-->
            <!--                <div class="modal-content mt-4">-->
            <!--                    <TextInput title="Фактическое значение" v-model:value="pokemonName.actual_indicator" type="text"/>-->
            <!--                </div>-->
            <!--                <div class="modal-content mt-4">-->
            <!--                    <TextInput title="Сумма двух других показателей" v-model:value="perfomance.amount_indicator" type="text"/>-->
            <!--                </div>-->

            <div class="modal-footer pt-4">
                <button type="submit" @click="closeModal"
                        class="rounded-md bg-indigo-500 px-3 py-2 mr-1 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    close
                </button>

            </div>


        </div>
    </div>
</template>

<script>
import {PokemonService} from "../../services/PokemonService";
import TextInput from "../instruments/TextInput.vue";

export default {
    name: "Modal",
    components: {TextInput},
    props: {
        pokemonId: Number
    },

    data: function () {
        return {
            pokemon: [],
        }
    },
    created() {
        console.log('pokemonId:', this.pokemonId);
        PokemonService.getPokemonByName(this.pokemonId)
            .then(response => this.pokemon = response)
    },
    methods: {
        closeModal() {
            this.$emit('close');
        },
    },
}
</script>

<style
    lang="scss">
.modal-shadow {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.39);
}

.modal_block {
    background: #fff;
    border-radius: 8px;
    padding: 15px;
    min-width: 720px;
    max-width: 780px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    &-close {
        border-radius: 50%;
        color: #fff;
        background: #2a4cc7;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 7px;
        right: 7px;
        width: 30px;
        height: 30px;
        cursor: pointer;
    }

    &-title {
        color: #0971c7;
    }

    &-content {
        margin-bottom: 20px;
        text-align: center;
    }

    &-footer {
        &__button {
            background-color: #0971c7;
            color: #fff;
            border: none;
            text-align: center;
            padding: 8px;
            font-size: 17px;
            font-weight: 500;
            border-radius: 8px;
            min-width: 150px;
        }
    }
}
</style>
