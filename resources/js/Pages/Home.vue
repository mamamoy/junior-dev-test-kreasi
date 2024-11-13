<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { computed, ref, watch } from 'vue';
import Modal from './Components/Modal.vue';
import FeedbackInput from './Components/FeedbackInput.vue';

const showModal = ref(false)

const openModal = () => {
    showModal.value = true
}
</script>
<template>

    <Head title="App" />
    <div class="min-h-screen flex items-center justify-center bg-gray-100">


        <div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow">
            <div class="grid grid-cols-2 pb-3 border-b border-b-gray-200">
                <Link :href="route('feedback.index')"
                    class="flex flex-col items-center justify-center border-r border-r-gray-200 p-4 hover:bg-blue-500 hover:rounded-md group transition ease-in-out delay-100 cursor-pointer">
                    <div class="mb-2">
                        <svg class="w-12 h-12 text-blue-700 group-hover:text-blue-50 transition ease-in-out delay-100" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h14" />
                        </svg>

                    </div>

                    <div
                        class="text-md font-extrabold text-blue-700 group-hover:text-blue-50 transition ease-in-out delay-100">
                        Feedback List</div>
                </Link>
                <button @click="openModal"
                    class="flex flex-col items-center justify-center p-4  hover:bg-blue-500 hover:rounded-md group transition ease-in-out delay-100 cursor-pointer">
                    <div class="mb-2">
                        <svg class="w-12 h-12 text-blue-700 group-hover:text-blue-50 transition ease-in-out delay-100"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 13c0 2.038-2.239 4.5-5 4.5S7 15.038 7 13c0 1.444 10 1.444 10 0Z" />
                            <path fill="currentColor"
                                d="m9 6.811.618 1.253 1.382.2-1 .975.236 1.377L9 9.966l-1.236.65L8 9.239l-1-.975 1.382-.2L9 6.811Zm6 0 .618 1.253 1.382.2-1 .975.236 1.377L15 9.966l-1.236.65L14 9.239l-1-.975 1.382-.2L15 6.811Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="m9 6.811.618 1.253 1.382.2-1 .975.236 1.377L9 9.966l-1.236.65L8 9.239l-1-.975 1.382-.2L9 6.811Zm6 0 .618 1.253 1.382.2-1 .975.236 1.377L15 9.966l-1.236.65L14 9.239l-1-.975 1.382-.2L15 6.811Z" />
                        </svg>

                    </div>
                    <div
                        class="text-md font-extrabold text-blue-700 group-hover:text-blue-50 transition ease-in-out delay-100">
                        Feedback Input</div>
                    <Modal :show="showModal" @update:show="showModal = $event" title="Give us your feedback">
                        <FeedbackInput @update:show="showModal = false" />
                    </Modal>
                </button>
            </div>

            <div class="w-full flex justify-center items-center pt-5">
                <button
                    class="flex items-center justify-center bg-blue-700 hover:bg-blue-500 w-full py-3 rounded-md text-sm font-bold text-white transition ease-in-out delay-100">Read
                    my CV
                    <svg class="w-4 h-4 text-white ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>

                </button>
            </div>

        </div>

    </div>
</template>