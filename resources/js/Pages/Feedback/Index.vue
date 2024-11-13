<script setup>
import { Head, usePage } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import { onMounted, reactive } from 'vue'
import { initFlowbite } from 'flowbite'
import FeedbackList from '../Components/FeedbackList.vue';

const feedbacks = reactive(usePage().props.value.feedbacks)

onMounted(() => {
    initFlowbite();
})
</script>
<template>
    <Head title="Feedback List"/>

    <div class="min-h-screen w-full mx-auto bg-gray-100"> 
        <Header/>
        <main class=" flex items-center justify-center borderp-4 mx-6">
            <div class="my-12">
                <FeedbackList :feedbacks="feedbacks"/>
            </div>
        </main>
    </div>
</template>