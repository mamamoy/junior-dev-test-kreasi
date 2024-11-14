<script setup>
import moment from 'moment';
import { computed, onMounted, reactive, ref } from 'vue';
import Modal from './Modal.vue';
import FeedbackInput from './FeedbackInput.vue';
import axios from 'axios';
import FeedbackDetail from './FeedbackDetail.vue';

const feedbacks = ref([])

onMounted(async () => {
    try {
        const response = await axios.get('/api/feedbacks')
        feedbacks.value = response.data
    } catch (error){
        console.error('Error fetching feedbacks: ', error)
    }
})


const showModal = ref(false)
const showDetail = ref(false)
const selectedFeedback = ref(null)

const openDetail = (item) => {
    selectedFeedback.value = item
    showDetail.value = true
}

const handleCloseDetail = (newShowState) => {
  if (!newShowState) {
    selectedFeedback.value = null;
    showDetail.value = false
  }
}

const openModal = () => {
    showModal.value = true
}

const getRatingDesc = (value) => {
    const ratingString = {
        1: 'Very bad',
        2: 'Bad',
        3: 'Average',
        4: 'Good',
        5: 'Very good'
    }
    return ratingString[value]
}

const getRatingColor = (value) => {
    const ratingColors = {
        1: 'bg-[#ff8c5a]',
        2: 'bg-[#ffb234]',
        3: 'bg-[#ffd934]',
        4: 'bg-[#add633]',
        5: 'bg-[#a0c15a]'
    };

    return ratingColors[value]
}

const fromNow = (date) => {
    return moment(date).fromNow()
}

const formatDate = (date) => {
    return moment(date).format('MMMM Do YYYY, h:mm:ss a')
}

const searchTable = ref('')


const filteredTable = computed(() => {
    if (!searchTable.value) {
        return feedbacks.value
    } else {
        const query = searchTable.value.toLowerCase();
        return feedbacks.value.filter(data => {
            const ratingDesc = getRatingDesc(data.rating).toLowerCase();
            if (ratingDesc.includes(query)) {
                return true
            }
            return data.name.toLowerCase().includes(query)
        })
    }
})

const pagination = reactive({
    currentPage: 1,
    perPage: 10,
    get totalPages() {
        return Math.ceil(filteredTable.value.length / this.perPage);
    }
})

const paginatedTable = computed(() => {
    const startIndex = (pagination.currentPage - 1) * pagination.perPage
    const endIndex = startIndex + pagination.perPage
    return filteredTable.value.slice(startIndex, endIndex)
})

const addFeedbackToList = (newFeedback) => {
    feedbacks.value.unshift(newFeedback)
}

</script>
<template>
    <div class="bg-white border border-gray-300 rounded-lg shadow-sm min-w-full">
        <div class="flex items-center justify-between py-7 border-b border-gray-300">
            <h1 v-once class="text-2xl px-4 font-bold text-blue-700 ml-4">
                Feedback List
            </h1>

            <form class="hidden md:block md:pl-2">
                <label for="search" class="sr-only">Search</label>
                <div class="relative md:w-64 lg:w-96">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                            </path>
                        </svg>
                    </div>
                    <input type="text" name="search" id="search" v-model="searchTable"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 "
                        placeholder="Search" />
                </div>
            </form>


            <div class="px-6">
                <button v-once @click="openModal" type="button"
                    class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 rounded-lg text-sm px-4 py-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add new feedback
                </button>
                <Modal :show="showModal" @update:show="showModal = $event" title="Give us your feedback">
                    <FeedbackInput @update:show="showModal = false" @feedbackAdded="addFeedbackToList" />
                </Modal>
            </div>
        </div>
        <div class="py-5 px-3">
            <div v-for="item in paginatedTable" :key="item.id"
                class="mx-2 p-2 border-b border-gray-200 hover:bg-gray-100 hover:rounded-md cursor-pointer group" @click="openDetail(item)">
                <div class="flex items-start gap-4">
                    <div class="flex items-center">
                        <img src="https://picsum.photos/100/140" class="rounded-lg group-hover:border-4 group-hover:border-blue-700">
                    </div>
                    <div class="space-y-3 w-full min-h-full">
                        <div class="h-1/5 py-2 border-b border-b-gray-300 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class=" text-lg text-gray-700 font-semibold group-hover:text-blue-700">
                                    {{ item.name }} -
                                </div>
                                <div :class="getRatingColor(item.rating)" class="px-1.5 ml-3 text-white rounded-sm">{{
                                    getRatingDesc(item.rating) }}</div>
                            </div>
                            <div class="mt-auto text-end">
                                <span class="font-extralight text-sm text-gray-700 group-hover:text-blue-700">
                                    {{ fromNow(item.created_at) }} - {{ formatDate(item.created_at) }}
                                </span>
                            </div>
                        </div>
                        <div class="h-4/5 text-sm text-gray-700 group-hover:text-blue-700">
                            {{ item.description.length > 600 ? item.description.substring(0, 600) + '...' :
                                item.description }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex items-center justify-end px-4 pb-6">
            <ul class="inline-flex -space-x-px text-base h-10">
                <li>
                    <button :disabled="pagination.currentPage <= 1" @click="pagination.currentPage--"
                        class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</button>
                </li>
                <li>
                    <button disabled
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{
                            pagination.currentPage }} of {{ pagination.totalPages }}</button>
                </li>

                <li>
                    <button :disabled="pagination.currentPage >= pagination.totalPages"
                        @click="pagination.currentPage++"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</button>
                </li>
            </ul>
        </div>
        <Modal :show="showDetail" @update:show="handleCloseDetail($event)" >
            <FeedbackDetail class="h-full" v-if="selectedFeedback" :detail="selectedFeedback"/>
        </Modal>
    </div>
</template>
