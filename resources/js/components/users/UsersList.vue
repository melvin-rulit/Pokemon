<template>
                                        <!--  Передаем в компонент Modal selectedPerfomanceId   -->
    <Modal v-if="showModal" @close="closeModal" :selectedPerfomanceId="selectedPerfomanceId" />

    <div class="sm:px-6 w-full">
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
            <h3 class="text-4xl font-extrabold dark:text-white">Список показателей</h3>
            <div class="mt-7 overflow-x-auto">

                <table class="w-full whitespace-nowrap">
                    <thead class="bg-gray-100">
                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                        <td class="">
                            <div class="flex items-center pl-5">
                                <p class="text-base font-medium leading-none text-gray-700 mr-2">Название</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">Код</p>
                            </div>
                        </td>
                        <td class="pl-5">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">Размерность</p>
                            </div>
                        </td>
                        <td class="pl-3">
                            <p class="text-sm leading-none text-gray-600 ml-2">Период от</p>
                        </td>
                        <td class="pl-3">
                            <p class="text-sm leading-none text-gray-600 ml-2">Период до</p>
                        </td>
                        <td class="pl-3">
                            <p class="text-sm leading-none text-gray-600 ml-2">Фактическое значение</p>
                        </td>
                        <td class="pl-3">
                            <p class="text-sm leading-none text-gray-600 ml-2">Сумма двух других показателей</p>
                        </td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-for="perfomance of perfomances" :key=perfomance.id tabindex="0"
                        @click="getShowModal(perfomance.id)"
                        class="focus:outline-none h-16 border border-gray-100 rounded cursor-pointer hover:bg-blue-100">
                        <td class="">
                            <div class="flex items-center pl-5">
                                <p class="text-base font-medium leading-none text-gray-700 mr-2">{{ perfomance.title }}</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ perfomance.code }}</p>
                            </div>
                        </td>
                        <td class="pl-20">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ perfomance.unit_of_measure }}</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ perfomance.period_start }}</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ perfomance.period_end }}</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ perfomance.actual_indicator }}</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ perfomance.amount_indicator }}</p>
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
import {PerfomanceService} from "../../services/PerfomanceService";
import Modal from "../instruments/Modal.vue";

export default {

    name: "PerfomanceList",
    components: {Modal},

    data: function () {
        return {
            perfomances: [],
            showModal: false,
            selectedPerfomanceId: null,
            errorMessage: ''
        }
    },
    created: async function () {
        this.update()
    },
    methods: {
        update: function () {
            this.loading = true;
            PerfomanceService.getPerfomances()
                .then(response => this.perfomances = response.data.data)
                .catch(error => this.errorMessage = error)
        },
        getShowModal: function (id) {
            this.selectedPerfomanceId = id;
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        },
    },


}
</script>
