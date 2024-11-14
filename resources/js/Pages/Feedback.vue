<script setup>
import { Head } from '@inertiajs/inertia-vue3';;

import FeedbackList from './Components/FeedbackList.vue';
import Index from './Layouts/Index.vue';


</script>
<template>
    <Index>

        <Head title="Feedback List" />

        <div class="my-12 w-full mx-4 p-4">
            <FeedbackList />
        </div>
    </Index>

</template>