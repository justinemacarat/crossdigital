<template>
    <section id="contactUs">
        <div class="mt-32 lg:mt-52 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 text-white">
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                            Start Now on Your Growth Journey
                        </h2>
                        <p class="w-3/4 my-4 text-white font-light text-sm lg:text-base">
                            We believe in the power of connection and communication. Whether you're looking to elevate your brand, enhance your online presence, or simply get answers to your questions, 
                            we're here to help you take that next step.
                        </p>

                        <div class="flex flex-col">
                            <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Comprehensive Marketing Strategies</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Innovative Digital Solutions</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Dedicated Support</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-lg font-medium leading-tight sm:leading-snug md:leading-[3rem]">
                            Contact Us :
                        </h3>

                        <ul class="list-none space-y-4">
                            <li class="flex items-center text-secondary">
                                <MapPinIcon class="h-4 w-4 text-white mr-2" />
                                <span class="font-semibold">99 Roving St., Big City</span>
                            </li>
                        </ul>
                        <ul class="list-none space-y-4 mt-2">
                            <li class="flex items-center text-secondary">
                                <EnvelopeIcon class="h-4 w-4 text-white mr-2" />
                                <span class="font-semibold">info@crossdigital.au</span>
                            </li>
                        </ul>
                        <ul class="list-none space-y-4 mt-2">
                            <li class="flex items-center text-secondary">
                                <PhoneIcon class="h-4 w-4 text-white mr-2" />
                                <span class="font-semibold">+123-234-1234</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div>
                        <p class="text-secondary font-semibold tracking-wider uppercase">Contact</p>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                            Start A Conversation With Us
                        </h2>
                    </div>

                    <div v-if="loading" class="mt-4">
                        <div class="loading-indicator">
                            <div class="spinner"></div>
                            <p class="text-white">Sending your message...</p>
                        </div>
                    </div>

                    <div v-if="showConfirmationDiv" class="thank-you-confirmation mt-8">
                        <h2 class="text-lg sm:text-xl md:text-2xl font-medium leading-tight sm:leading-snug md:leading-[3rem] text-white">
                            Thank you!
                        </h2>
                        <p class="text-white text-sm lg:text-base">Your message has been successfully received. We will get back to you shortly.</p>
                    </div>

                    <form v-if="!loading && !showConfirmationDiv" @submit.prevent="sendMessage" class="flex-grow">
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium leading-6 text-white">First name</label>
                                        <div class="mt-2">
                                            <input type="text" 
                                                v-model="form.first_name"
                                                name="first_name" 
                                                id="first_name" 
                                                autocomplete="first-name" 
                                                required
                                                class="block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 placeholder:text-gray-400 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="last-name" class="block text-sm font-medium leading-6 text-white">Last name</label>
                                        <div class="mt-2">
                                            <input type="text" 
                                                v-model="form.last_name"
                                                name="last_name" 
                                                id="last_name" 
                                                autocomplete="last-name" 
                                                required
                                                class="block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 placeholder:text-gray-400 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="email" class="block text-sm font-medium leading-6 text-white">Email</label>
                                        <div class="mt-2">
                                            <input type="email" 
                                                v-model="form.email"
                                                name="email" 
                                                id="email" 
                                                autocomplete="email" 
                                                required
                                                class="block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 placeholder:text-gray-400 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="company" class="block text-sm font-medium leading-6 text-white">Company</label>
                                        <div class="mt-2">
                                            <input type="text" 
                                                v-model="form.company"
                                                name="company" 
                                                id="company" 
                                                autocomplete="company" 
                                                required
                                                class="block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 placeholder:text-gray-400 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6">
                                        </div>  
                                    </div>

                                    <div class="col-span-full">
                                        <label for="message" class="block text-sm font-medium leading-6 text-white">Message</label>
                                        <div class="mt-2">
                                            <textarea id="message" 
                                                    v-model="form.message"
                                                    name="message" 
                                                    rows="3" 
                                                    required
                                                    class="block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit"  
                                class="block w-full rounded-md uppercase text-black border-2 border-secondary bg-secondary font-semibold text-sm md:text-md px-6 py-2 
                                        mb-4 md:mb-0 text-center hover:bg-transparent hover:border-secondary hover:text-white">
                                Send a message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
    import { CheckIcon } from '@heroicons/vue/16/solid';
    import { MapPinIcon, EnvelopeIcon, PhoneIcon } from '@heroicons/vue/24/outline';
    import { useForm } from '@inertiajs/vue3';
    import { ref } from 'vue';
    import axios from 'axios';
    //import { useHead } from '@vueuse/head';

    const form = useForm({
        first_name: '',
        last_name: '',
        email: '',
        company: '',
        message: ''
    });

    const showConfirmationDiv = ref(false);
    const loading = ref(false);

    const appUrl = import.meta.env.VITE_APP_URL;

    const sendMessage = () => {
        loading.value = true; // Set loading state
        axios.post('/api/contact', form).then(response => {
            loading.value = false; // Reset loading state
            if (response.data.success) {
                showConfirmationDiv.value = true;
                form.reset(); // Reset the form after submission
            } else {
                alert('Something went wrong. Please try again later.');
            }
        }).catch(error => {
            console.error(error);
            loading.value = false; // Reset loading state on error
            alert('Something went wrong. Please try again later.');
        });
    };

    // SEO Head Data
    // useHead({
    //     title: 'Contact Us - Cross Digital | Digital Marketing Experts',
    //     meta: [
    //         {
    //             name: 'description',
    //             content: 'Get in touch with us for inquiries, support, or feedback. We value your communication and look forward to connecting with you.'
    //         },
    //         {
    //             property: 'og:title',
    //             content: 'Contact Us - Cross Digital'
    //         },
    //         {
    //             property: 'og:description',
    //             content: 'Reach out to us for any questions or support. Your feedback is important to us!'
    //         },
    //         {
    //             property: 'og:url',
    //             content: `${appUrl}/#contact`
    //         },
    //         {
    //             property: 'twitter:card',
    //             content: 'summary_large_image'
    //         },
    //         {
    //             property: 'twitter:title',
    //             content: 'Contact Us - Cross Digital'
    //         },
    //         {
    //             property: 'twitter:description',
    //             content: 'We are here to assist you with your inquiries.'
    //         }
    //     ]
    // });
</script>

<style scoped>
    .loading-indicator {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .spinner {
        border: 4px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        border-top: 4px solid #ffffff;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
    
    .thank-you-confirmation {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
</style>
