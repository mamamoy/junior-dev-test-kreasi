<script setup>
import { Inertia } from '@inertiajs/inertia';
import axios from 'axios';
import { computed, ref } from 'vue';

const emit = defineEmits(['update:show'])

const closeModal = () => {
    emit('update:show', false)
}

const name = ref('')
const email = ref('')
const description = ref('')
const selectedEmoji = ref(null)

const emoji = [
    { num: 1, emojiImg: '/images/emoji/1.svg', alt: 'very bad' },
    { num: 2, emojiImg: '/images/emoji/2.svg', alt: 'bad' },
    { num: 3, emojiImg: '/images/emoji/3.svg', alt: 'nope' },
    { num: 4, emojiImg: '/images/emoji/4.svg', alt: 'good' },
    { num: 5, emojiImg: '/images/emoji/5.svg', alt: 'very good' },
]

const setEmoji = (num) => {
    selectedEmoji.value = num
}
console.log(selectedEmoji.value)

const isSelected = (num) => {
    return selectedEmoji.value === num
}

const nameError = ref('')
const emailError = ref('')
const ratingError = ref('')
const descriptionError = ref('')

const validateName = () => {
    nameError.value = ''
    if (!name.value) {
        nameError.value = "Your name cannot be empty"
    } else if (name.value.length < 3) {
        nameError.value = "Your name is at least more than 3 letters"
    }
}
const validateEmail = () => {
    emailError.value = ''
    if (!email.value) {
        emailError.value = "Your email cannot be empty"
    }
}
const validateRating= () => {
    ratingError.value = ''
    if (!selectedEmoji.value) {
        ratingError.value = "Your rating cannot be empty"
    }
}
const validateDescription = () => {
    descriptionError.value = ''
    if (!description.value) {
        descriptionError.value = "Your description cannot be empty"
    } else if (description.value.length < 3) {
        descriptionError.value = "Your description is at least more than 3 letters"
    }
}

const isFormValid = computed(() => {
    validateName()
    validateEmail()
    validateRating()
    validateDescription()
    return !nameError.value && !emailError.value && !descriptionError.value
})


const storeFeedback = async () => {
    const formData = new FormData()
    formData.append('name', name.value)
    formData.append('email', email.value)
    formData.append('rating', selectedEmoji.value)
    formData.append('description', description.value)
    try {
        const response = await axios.post('/feedback/store', formData)

        if (response.data.status === 'success') {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: response.data.msg,
                showConfirmButton: false,
                timer: 1500
            })
        }
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Your feedback has not been saved, try again!'
        })
    }

}

const submitConfirmation = () => {
    Swal.fire({
        title: 'Are you sure ?',
        text: 'Your feedback will be submitted',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, submit it!"
    }).then((result) => {
        if (result.isConfirmed) {
            storeFeedback()
            closeModal()
            resetForm()
            Inertia.get(window.location.href);
        }
    })
}

const submitForm = () => {
    validateName()
    validateEmail()
    validateDescription()
    if (isFormValid.value) {
        submitConfirmation()
    }
}

const resetForm = () => {
    name.value = ''
    email.value = ''
    description.value = ''
}
</script>
<template>
    <form @submit.prevent="submitForm">
        <div class="p-4 md:p-5 space-y-4">
            <div>
                <div class="w-full flex items-center gap-2">
                    <label for="name" class="text-md text-gray-500 text-extrabold w-1/5">Name</label>
                    <input :class="!nameError ? 'border-gray-400' : 'border-red-600'"
                        class="w-full rounded-md focus:ring-blue-400 focus:border-blue-400" type="text" name="name"
                        id="name" v-model="name" placeholder="Your name" autofocus>
                </div>
                <span v-if="nameError" class="text-red-500 text-sm flex justify-end">{{ nameError }}</span>
            </div>
            <div>
                <div class="w-full flex items-center gap-2">
                    <label for="email" class="text-md text-gray-500 text-extrabold w-1/5">Email</label>
                    <input :class="!emailError ? 'border-gray-400' : 'border-red-600'"
                        class="w-full rounded-md focus:ring-blue-400 focus:border-blue-400" type="email" name="email"
                        id="email" v-model="email" placeholder="your-email@example.com">
                </div>
                <span v-if="emailError" class="text-red-500 text-sm flex justify-end ">{{ emailError }}</span>
            </div>
            <div>
                <div class="grid grid-cols-5 gap-2">
                    <div class="flex items-center justify-center" v-for="list in emoji" :key="list.num">
                        <button @click.prevent="setEmoji(list.num)">
                            <img :class="[
                                'transition-all duration-200',
                                isSelected(list.num) ? 'w-[90px] h-[90px]' : 'w-[40px] h-[40px]',
                                { 'hover:w-[90px] hover:h-[90px] active:w-[90px] active:h-[90px]': !isSelected(list.num) }
                            ]" :src="list.emojiImg" :alt="list.alt" />
                        </button>
                    </div>
                </div>
                <span v-if="ratingError" class="text-red-500 text-sm flex justify-end">{{ ratingError
                    }}</span>
            </div>
            <div>
                <div class="w-full flex items-center gap-2">
                    <label for="description" class="text-md text-gray-500 text-extrabold w-1/5">Feedback</label>
                    <textarea :class="!descriptionError ? 'border-gray-400' : 'border-red-600'"
                        class="w-full h-[200px] rounded-md focus:ring-blue-400 focus:border-blue-400" type="email"
                        name="description" id="description" v-model="description"
                        placeholder="Describe your opinion about our service here"></textarea>
                </div>
                <span v-if="descriptionError" class="text-red-500 text-sm flex justify-end">{{ descriptionError
                    }}</span>
            </div>
        </div>

        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <button @click="resetForm"
                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Reset</button>
        </div>
    </form>
</template>