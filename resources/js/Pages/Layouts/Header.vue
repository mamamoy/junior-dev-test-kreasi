<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import {route} from 'ziggy-js'

const menuItems = [
    {name: 'Feedback List', routeName: 'feedback.index'},
    {name: 'About Me', routeName: 'about-me.index'},
]
</script>
<template>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 shadow-sm">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen">
                <a href="/" class="flex items-center">
                    <span class="self-center text-xl font-semibold whitespace-nowrap ">AAN SETIAWAN</span>
                </a>
                
                <div class="flex items-center lg:order-2">
                    <a href="https://github.com/mamamoy" target="_blank"
                        class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2  focus:outline-none">
                        Visit on my Github
                        <svg class="-mt-0.5 ml-2 w-4 h-4 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                        </svg>
                    </a>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul v-for="menu in menuItems" :key="menu" class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <Link :href="route(menu.routeName)" :class="route().current(menu.routeName) ? 'bg-blue-700 lg:text-blue-700 text-white hover:bg-gray-200' : 'text-gray-700 hover:bg-gray-200'"
                                class="block py-2 pr-4 pl-3 rounded  lg:bg-transparent"
                                aria-current="page">{{ menu.name }}</Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>