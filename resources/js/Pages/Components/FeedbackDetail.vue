<script setup>
import moment from 'moment';


const props = defineProps({
    detail: {
        type: Object
    }
})

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
        1: 'text-[#ff8c5a]',
        2: 'text-[#ffb234]',
        3: 'text-[#ffd934]',
        4: 'text-[#add633]',
        5: 'text-[#a0c15a]'
    };

    return ratingColors[value]
}

const getDateTime = (date) => {
    return moment().format('MMMM Do YYYY, h:mm:ss a')
}

</script>

<template>
  <div class="p-6 space-y-2 h-full mb-6">
    <div class="pb-3 border-b boreder-gray-300">
        <div class="text-blue-700 text-lg font-bold">Feedback Detail</div>
    </div>
    <div class="flex items-center">
        <div class="w-1/5 pr-1">
            <div class="text-md text-gray-800">Name</div>
        </div>
        <div class="w-0.5/5 pr-1">
            <div class="text-md text-gray-800">:</div>
        </div>
        <div class="flex-1">
            <div class="text-md text-gray-800 font-extrabold">{{ props.detail.name }}</div>
        </div>
    </div>
    <div class="flex items-center">
        <div class="w-1/5 pr-1">
            <div class="text-md text-gray-800">Email</div>
        </div>
        <div class="w-0.5/5 pr-1">
            <div class="text-md text-gray-800">:</div>
        </div>
        <div class="flex-1">
            <div class="text-md text-gray-800">{{ props.detail.email }}</div>
        </div>
    </div>
    <div class="flex items-center">
        <div class="w-1/5 pr-1">
            <div class="text-md text-gray-800">Rating</div>
        </div>
        <div class="w-0.5/5 pr-1">
            <div class="text-md text-gray-800">:</div>
        </div>
        <div class="flex-1">
            <div class="text-md font-bold" :class="getRatingColor(props.detail.rating)">{{ getRatingDesc(props.detail.rating) }}</div>
        </div>
    </div>
    <div class="flex items-center">
        <div class="w-1/5 pr-1">
            <div class="text-md text-gray-800">Date</div>
        </div>
        <div class="w-0.5/5 pr-1">
            <div class="text-md text-gray-800">:</div>
        </div>
        <div class="flex-1">
            <div class="text-md text-gray-800">{{ getDateTime(props.detail.created_at) }}</div>
        </div>
    </div>
    <div class="flex">
        <div class="w-1/5 pr-1">
            <div class="text-md text-gray-800">Description</div>
        </div>
        <div class="w-0.5/5 pr-1">
            <div class="text-md text-gray-800">:</div>
        </div>
        <div class="flex-1 h-full overflow-auto">
            <div class="text-md text-gray-800">{{ props.detail.description }}</div>
        </div>
    </div>

  </div>
</template>
