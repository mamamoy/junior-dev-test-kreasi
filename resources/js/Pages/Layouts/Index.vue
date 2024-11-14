<script setup>
import Header from '../Layouts/Header.vue';
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

onMounted(() => {
    initFlowbite();
})
</script>
<template>

    <div class="min-h-screen w-full mx-auto bg-slate-200">
        <Header v-once />
        <main class=" flex w-full">
            <slot />
        </main>
    </div>
</template>