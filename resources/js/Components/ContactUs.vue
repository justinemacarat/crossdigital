<template>
    <section id="contact-us">
        <div class="mt-16 sm:mt-24 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 text-white">
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium leading-tight sm:leading-snug md:leading-[3rem]">
                            Start Now on Your Growth Journey
                        </h2>
                        <p class="my-4 text-white font-light text-sm lg:text-base">
                            Praesent pretium, erat in finibus varius, metus erat efficitur lacus, eget porta diam purus id orci. Vestibulum ante ipsum primis in faucibus orci luctus;
                        </p>

                        <div class="flex flex-col">
                            <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Feature 1</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Feature 2</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Feature 3</span>
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
                                <span class="font-semibold">hello@awesomesite.com</span>
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

                <div class="flex flex-col justify-between">
                    <div>
                        <p class="text-secondary font-semibold mt-2">Contact</p>
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium leading-tight sm:leading-snug md:leading-[3rem]">
                            More about you
                        </h2>
                    </div>
                    
                    <form class="flex-grow">
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium leading-6 text-white">First name</label>
                                        <div class="mt-2">
                                            <input type="text" 
                                                name="first-name" 
                                                id="first-name" 
                                                autocomplete="given-name" 
                                                class="block w-full border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 placeholder:text-gray-400 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="last-name" class="block text-sm font-medium leading-6 text-white">Last name</label>
                                        <div class="mt-2">
                                            <input type="text" 
                                                name="last-name" 
                                                id="last-name" 
                                                autocomplete="given-name" 
                                                class="block w-full border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 placeholder:text-gray-400 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="email" class="block text-sm font-medium leading-6 text-white">Email</label>
                                        <div class="mt-2">
                                            <input type="text" 
                                                name="email" 
                                                id="email" 
                                                autocomplete="given-name" 
                                                class="block w-full border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 placeholder:text-gray-400 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="url" class="block text-sm font-medium leading-6 text-white">URL</label>
                                        <div class="mt-2">
                                            <input type="text" 
                                                name="url" 
                                                id="url" 
                                                autocomplete="given-name" 
                                                class="block w-full border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="country" class="block text-sm font-medium leading-6 text-white">Country</label>
                                        <div class="mt-2">
                                            <select id="country" 
                                                name="country" 
                                                autocomplete="country-name" 
                                                class="country-select block w-full border-0 py-1.5 text-white bg-black shadow-sm ring-1 ring-inset ring-neutral-500/60
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 sm:text-sm sm:leading-6">
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>Mexico</option>
                                            </select>
                                        </div>  
                                    </div>

                                    <div class="col-span-full">
                                        <label for="message" class="block text-sm font-medium leading-6 text-white">Message</label>
                                        <div class="mt-2">
                                            <textarea id="message" 
                                                    name="message" 
                                                    rows="3" 
                                                    class="block w-full border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-neutral-500/60 
                                                        focus:ring-2 focus:ring-inset focus:ring-neutral-500/60 bg-transparent sm:text-sm sm:leading-6"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="mt-6">
                        <button type="button" 
                            class="block w-full uppercase text-black border-2 border-secondary bg-secondary font-semibold text-sm md:text-md px-6 py-2 
                                    mb-4 md:mb-0 text-center hover:bg-transparent hover:border-secondary hover:text-white">
                            Send a message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
    import { CheckIcon } from '@heroicons/vue/16/solid';
    import { MapPinIcon, EnvelopeIcon, PhoneIcon } from '@heroicons/vue/24/outline';
</script>

<style>
    select.country-select option {
        background-color: theme('colors.blackGray.DEFAULT'); 
        color: white;
    }
</style>