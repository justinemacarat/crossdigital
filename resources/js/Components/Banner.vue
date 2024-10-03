<template>
    <section id="home-banner">
        <div class="mt-8 md:mt-28 grid grid-cols-1 md:grid-cols-3 gap-4 text-white">
            <!-- Text Section -->
            <div class="flex flex-col justify-center col-span-1 md:col-span-2">
                <h1 class="mb-6 text-3xl md:text-5xl uppercase font-medium leading-9 md:leading-[4.5rem]">
                    Your Path to Digital Domination Starts Here
                </h1>
                <p class="mb-8 font-light text-sm md:text-base">
                    Welcome to the gateway of digital excellence, where your journey towards unparalleled success in the online realm begins.
                </p>
                <div class="flex flex-col md:flex-row">
                    <button type="button" class="uppercase text-black border-2 border-secondary bg-secondary font-semibold text-sm md:text-md px-6 py-3 mb-4 md:mb-0 md:mr-5 text-center hover:bg-transparent hover:border-secondary hover:text-white">
                        About Us
                    </button>
                    <button type="button" class="uppercase text-white border-2 border-secondary font-semibold text-sm md:text-md px-6 py-3 text-center hover:bg-secondary hover:text-primary">
                        Contact
                    </button>
                </div>
            </div>

            <!-- Image Section -->
            <div class="flex justify-center md:justify-end mt-8 md:mt-0">
                <img class="w-5/6 md:w-full h-auto max-w-xs md:max-w-full object-cover" src="/images/banner-laptop.jpg" alt="image description">
            </div>
        </div>
    </section>
</template>
