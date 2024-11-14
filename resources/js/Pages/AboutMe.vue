<script setup>
import { ref } from 'vue';
import Modal from './Components/Modal.vue'
import Index from './Layouts/Index.vue';

const showProject1 = ref(false)
const showProject2 = ref(false)

const openProject1 = () => {
    showProject1.value = true
}
const openProject2 = () => {
    showProject2.value = true
}
</script>

<template>
    <Index v-once>
        <div class="flex flex-col w-full pb-7">
            <div class="flex mt-8 px-5 max-h-[600px] w-full gap-5">
                <div class="grow relative w-full h-full">
                    <div class="absolute inset-0 bg-white opacity-30 rounded-[1rem]"></div>
                    <img src="images/backgrounds/1.jpg" alt="description"
                        class="w-full h-full object-cover rounded-[1rem]">
                    <div
                        class="absolute inset-0 p-3 pr-5 md:p-4 md:pr-10 lg:p-5 lg:pr-40 xl:p-12 xl:pr-80 h-full overflow-auto">
                        <div
                            class="text-gray-800 text-lg md:text-xl lg:text-2xl xl:text-4xl md:font-bold tracking-normal leading-normal lg:font-extrabold lg:tracking-wider lg:leading-loose">
                            Hallo, Namaku Aan Setiawan</div>
                        <div
                            class="text-gray-800 text-lg md:text-xl lg:text-2xl xl:text-3xl md:font-bold tracking-normal leading-normal lg:font-extrabold lg:tracking-wider lg:leading-relaxed">
                            Saya adalah seorang
                            freelancer yang biasa mengerjakan project website laravel</div>
                        <div
                            class="lg:text-xl md:text-sm text-xs text-gray-800 mt-5 font-semibold xl:leading-relaxed xl:tracking-tight">
                            Saya sangat tertarik dalam bidang web developer dan data
                            analis, saya mudah beradaptasi serta mempu bekerja dalam rekan tim maupun secara individu.
                            Saya memiliki banyak pengalaman kerja meskipun tidak pada bidang IT, tetapi saya ingin
                            mendedikasikan diri sebagai Web Developer.</div>
                    </div>
                    <div class="absolute bottom-0 p-2 md:p-4 lg:p-5 xl:p-12 w-full overflow-auto">
                        <div class="flex items-center justify-start gap-8">
                            <div class="py-4 px-6 bg-gray-900 min-w-lg rounded-full">
                                <a href="mailto:an.aansetiawan02@gmail.com" target="_blank"
                                    class=" text-white text-md font-extrabold ">Contact
                                    me</a>
                            </div>

                            <a href="https://linkedin.com/in/aan-setiawan-a3b682291" target="_blank"
                                class="p-2 bg-gray-100 rounded-full shadow-sm hover:border hover:border-gray-300 transition-all">
                                <svg class="w-8 h-8 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                        clip-rule="evenodd" />
                                    <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                </svg>

                            </a>
                            <a href="https://github.com/mamamoy" target="_blank"
                                class="p-2 bg-gray-100 rounded-full shadow-sm hover:border hover:border-gray-300 transition-all">
                                <svg class="w-8 h-8 text-gray-800 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                <img class="w-1.5/5 object-cover h-full rounded-[1rem]" src="images/photos/profile.jpg" alt="">
            </div>
            <div class="flex mt-8 px-5 h-[1000px] w-full gap-5">
                <div class="w-2/5 h-full rounded-[1rem] bg-gradient-to-br from-indigo-500 to-indigo-800 overflow-auto">
                    <div class="p-7">

                        <div
                            class=" xl:text-xl font-extrabold text-gray-200 text-lg pb-2 border-b border-gray-300 tracking-widest ">
                            PENGALAMAN
                        </div>
                        <div class="">
                            <div class="py-4 flex gap-12">
                                <div class="text-lg text-gray-300 w-2/6">
                                    12/2022 - 04/2024
                                </div>
                                <div class="w-4/6">
                                    <div class="text-indigo-100 text-lg font-bold">Maintenance</div>
                                    <div class="text-gray-300 text-md">PT. Nusantara Global Inovasi</div>
                                    <div class="text-gray-200 text-md pt-2">Penempatan di Dinas Perhubungan Jawa Timur.
                                    </div>
                                    <ul class="list-disc pl-4 text-gray-200 text-md">
                                        <li>Memastikan fungsionalitas perangkat lunak</li>
                                        <li>Menjelaskan tentang perangkat lunak yang digunakan</li>
                                        <li>Mengidentifikasi dan menyelesaikan masalah teknis di ruang server dengan
                                            baik</li>
                                        <li>Memastikan kinerja infrastruktur yang optimal</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pb-4 flex gap-12">
                                <div class="text-lg text-gray-300 w-2/6">
                                    05/2017 - 12/2021
                                </div>
                                <div class="w-4/6">
                                    <div class="text-indigo-100 text-lg font-bold">Merchandiser</div>
                                    <div class="text-gray-300 text-md">PT. Cipta Artha Nadya</div>
                                    <div class="text-gray-200 text-md pt-2">Penempatan di toko NKA & MTI dengan brand
                                        Frisian Flag.
                                    </div>
                                    <ul class="list-disc pl-4 text-gray-200 text-md">
                                        <li>Pengecekan produk (ketersediaan, expired date, promi & planogram)</li>
                                        <li>Implementasi event promo yang sedang berjalan</li>
                                        <li>Memasikan produk tetap FEFO (First Expired First Out)</li>
                                        <li>Reporting (Display, MSS, SoS)</li>
                                        <li>Menginformasikan tentang promo yang sedang berjalan kepada customer</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pb-4 flex gap-12">
                                <div class="text-lg text-gray-300 w-2/6">
                                    08/2016 - 04/2017
                                </div>
                                <div class="w-4/6">
                                    <div class="text-indigo-100 text-lg font-bold">Sales Promotion Male</div>
                                    <div class="text-gray-300 text-md">PT. Trimitra Promosindo</div>
                                    <div class="text-gray-200 text-md pt-2">Penempatan di Hartono Bg Juniction Surabaya.
                                    </div>
                                    <ul class="list-disc pl-4 text-gray-200 text-md">
                                        <li>Menawarkan produk dell kepada customer</li>
                                        <li>Menginformasikan setiap keunggulan produk kepada cutomer</li>
                                        <li>Memasikan target bulanan tercapai</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grow flex flex-col w-full h-full gap-4">
                    <figure @click="openProject1"
                        class="w-full h-1/2 relative transition-all duration-300 cursor-pointer group">
                        <Modal :show="showProject1" @update:show="showProject1 = $event" maxWidth="3xl">
                            <img class="w-full" src="images/projects/1.png" alt="">
                        </Modal>
                        <img class="h-full w-full transition-all duration-300 cursor-pointer filter grayscale group-hover:grayscale-0 object-cover rounded-[1rem]"
                            src="images/projects/1.png" alt="">
                        <figcaption
                            class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-black/50 to-transparent rounded-[1rem] p-4 z-10 opacity-100 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="text-lg text-white">K-Means System</p>
                            <p class="text-md text-white">Sistem pengelompokkan kasus Covid-19 Tingkat Provinsi di
                                Indonesia menggunakan algoritma k-means.</p>
                        </figcaption>
                    </figure>
                    <figure @click="openProject2"
                        class="w-full h-1/2 relative transition-all duration-300 cursor-pointer group">
                        <Modal :show="showProject2" @update:show="showProject2 = $event" maxWidth="3xl">
                            <img class="w-full" src="images/projects/2.png" alt="">
                        </Modal>
                        <img class="h-full w-full transition-all duration-300 cursor-pointer filter grayscale group-hover:grayscale-0 object-cover rounded-[1rem]"
                            src="images/projects/2.png" alt="">
                        <figcaption
                            class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-black/50 to-transparent rounded-[1rem] p-4 z-10 opacity-100 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="text-lg text-white">SPK Rekomendasi Tempat Wisata</p>
                            <p class="text-md text-white">Sistem rekomendasi tempat wisata menggunakan metode weighted
                                product.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="flex mt-8 px-5 h-full w-full gap-5">
                <div class="w-2/6 h-full rounded-[1rem] bg-gradient-to-br from-gray-100 to-gray-300 overflow-auto">
                    <div class="p-7">

                        <div
                            class=" xl:text-xl font-extrabold text-gray-800 text-lg pb-2 border-b border-gray-400 tracking-widest ">
                            PENDIDIKAN
                        </div>
                        <div class="">
                            <div class="py-4 flex gap-12">
                                <div class="text-lg text-gray-600 w-2/6">
                                    08/2019 - 04/2023
                                </div>
                                <div class="w-4/6">
                                    <div class="text-gray-800 text-lg font-bold">Teknik Informatika</div>
                                    <div class="text-gray-600 text-md">Universitas Dr. Soetomo Surabaya</div>
                                    <div class="text-gray-800 text-md pt-2">Sarjana.
                                    </div>
                                    <ul class="list-disc pl-4 text-gray-800 text-md">
                                        <li>Lulus dengan pujian</li>
                                        <li>IPK 3.83</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pb-4 flex gap-12">
                                <div class="text-lg text-gray-600 w-2/6">
                                    08/2012 - 08/2015
                                </div>
                                <div class="w-4/6">
                                    <div class="text-gray-800 text-lg font-bold">IPA</div>
                                    <div class="text-gray-600 text-md">Hang Tuah</div>
                                    <div class="text-gray-800 text-md pt-2">Sekolah Menengah Atas.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-4/6 h-full rounded-[1rem] bg-gradient-to-br from-slate-600 to-slate-800 overflow-auto">
                    <div class="p-7">

                        <div
                            class=" xl:text-xl font-extrabold text-gray-100 text-lg pb-2 border-b border-gray-300 tracking-widest ">
                            SERTIFIKASI
                        </div>
                        <div class="">
                            <div class="py-4 flex gap-12">
                                <div class="text-lg text-gray-300 w-2/6">
                                    12/2023 - Sekarang
                                </div>
                                <div class="w-4/6">
                                    <a href="https://www.hackerrank.com/certificates/c6947f1894a6"
                                        class="text-gray-200 text-lg font-bold hover:underline cursor-pointer">SQL
                                        Basic</a>
                                    <div class="text-gray-300 text-md">HackerRank</div>
                                    <ul class="list-disc pl-4 text-gray-200 text-md">
                                        <li>Mencakup query, relations, dan agregator sederhana</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="py-4 flex gap-12">
                                <div class="text-lg text-gray-300 w-2/6">
                                    11/2023 - Sekarang
                                </div>
                                <div class="w-4/6">
                                    <a href="https://www.hackerrank.com/certificates/bc6c478cd78b"
                                        class="text-gray-200 text-lg font-bold hover:underline cursor-pointer">Problem
                                        Solving Basic</a>
                                    <div class="text-gray-300 text-md">HackerRank</div>
                                    <ul class="list-disc pl-4 text-gray-200 text-md">
                                        <li>Pemecahan masalah berfokus pada studi, pemahaman, dan penggunaan struktur
                                            data dan algoritma</li>
                                        <li>Struktur data dan algoritme dasar</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="py-4 flex gap-12">
                                <div class="text-lg text-gray-300 w-2/6">
                                    09/2023 - Sekarang
                                </div>
                                <div class="w-4/6">
                                    <a href="https://www.freecodecamp.org/certification/fcc85a04b64-abee-418b-b936-5c4e7dc20ce6/data-analysis-with-python-v7"
                                        class="text-gray-200 text-lg font-bold hover:underline cursor-pointer">Data
                                        Analyst with Python</a>
                                    <div class="text-gray-300 text-md">FreeCodeCamp</div>
                                    <ul class="list-disc pl-4 text-gray-200 text-md">
                                        <li>Data analizing, extraction, transform dan visualisasi menggunakan python
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/6 h-full rounded-[1rem] bg-white overflow-auto">
                    <div class="p-7">

                        <div
                            class=" xl:text-xl font-extrabold text-gray-800 text-lg pb-2 border-b border-gray-300 tracking-widest ">
                            SKILL
                        </div>
                        <div class="py-4">
                            <div class="text-gray-800 text-md">
                                <p>Visual Merchandising</p>
                                <p>Analytical</p>
                                <p>Data Analyst</p>
                                <p>Java Script</p>
                                <p>PHP</p>
                                <p>Phyton</p>
                                <p>Machine Learning</p>
                                <p>MySQL, PostgreSQL</p>
                                <p>Web Programming</p>
                                <p>Time Management</p>
                                <p>Microsoft Suites (Word, Power Point, Excel, Power BI)</p>
                                <p>Data Visualisasi</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>



    </Index>
</template>

<style></style>
