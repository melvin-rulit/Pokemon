<template>
    <div class="modal-shadow">
        <div class="modal_block">

            <form @submit="update">

                <span class="modal-title pt-2 text-lg">Редактирование показателя</span>

                <div class="modal-content mt-4">
                    <TextInput title="Название" v-model:value="perfomance.title" type="text"/>
                </div>
                <div class="modal-content mt-4">
                    <TextInput title="Код" v-model:value="perfomance.code" type="text"/>
                </div>
                <div class="modal-content mt-4">
                    <TextInput title="Размерность" v-model:value="perfomance.unit_of_measure" type="text"/>
                </div>
                <div class="modal-content mt-4">
                    <TextInput title="Период от" v-model:value="perfomance.period_start" type="text"/>
                </div>
                <div class="modal-content mt-4">
                    <TextInput title="Период до" v-model:value="perfomance.period_end" type="text"/>
                </div>
                <div class="modal-content mt-4">
                    <TextInput title="Фактическое значение" v-model:value="perfomance.actual_indicator" type="text"/>
                </div>
                <div class="modal-content mt-4">
                    <TextInput title="Сумма двух других показателей" v-model:value="perfomance.amount_indicator" type="text"/>
                </div>

                <div class="modal-footer pt-4">
                    <button type="submit" @click="closeModal"
                            class="rounded-md bg-red-500 px-3 py-2 mr-1 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Отмена
                    </button>

                    <button type="submit"
                            class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Сохранить
                    </button>

                </div>

            </form>

        </div>
    </div>
</template>

<script>
import {PerfomanceService} from "../../services/PerfomanceService";
import TextInput from "../instruments/TextInput.vue";

export default {
    name: "Modal",
    components: {TextInput},
    props: {
        selectedPerfomanceId: ''
    },

    data: function () {
        return {
            perfomance: {
                'title': '',
                'code': '',
                'unit_of_measure': '',
                'period_start': '',
                'period_end': '',
                'actual_indicator': '',
                'amount_indicator': '',
            },
            message: ''
        }
    },
    created() {
        PerfomanceService.getPerfomanceById(this.selectedPerfomanceId)
            .then(response => this.perfomance = response.data.perfomance)
    },
    methods: {
        closeModal() {
            this.$emit('close');
        },
        update: async function (event) {
            event.preventDefault()
            this.errors = null
            PerfomanceService.update(this.perfomance)
                .then(response => {
                    this.perfomance = response.data.perfomance
                    this.message = 'Изменения сохранены'
                })
                .catch(error => {
                    this.errors = error.response.data.message
                })
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
