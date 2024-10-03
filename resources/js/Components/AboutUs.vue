<template>
  <section id="about-us">
    <div class="mt-16 sm:mt-24 md:mt-40 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 text-white">
      <!-- Image Section -->
      <div class="flex justify-start">
        <img
          class="w-full h-48 sm:h-64 md:h-full object-cover"
          src="/images/banner-laptop.jpg"
          alt="image description"
        />
      </div>
  
      <!-- Text Section -->
      <div class="flex flex-col justify-center">
        <p class="text-secondary font-semibold">About Us</p>
        <h1 class="mt-4 text-3xl sm:text-4xl md:text-5xl font-medium leading-tight sm:leading-snug md:leading-[3rem]">
          We love what we do
        </h1>
        <p class="mt-4 text-sm sm:text-base md:text-lg text-white">
          Quisque venenatis vestibulum consequat. Vivamus ac urna nulla. Duis sit
          amet consectetur nisi, eget elementum nunc. Orci varius natoque
          penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
  
        <!-- Vision and Mission Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 my-8 md:my-14">
          <div class="p-6 sm:p-8 bg-blackGray text-white">
            <div>
              <EyeIcon class="w-6 sm:w-8 text-secondary mb-3" />
              <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight">
                Our Vision
              </h5>
            </div>
            <p class="mb-3 text-sm sm:text-base text-white">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
              tellus, luctus nec.
            </p>
          </div>
          <div class="p-6 sm:p-8 bg-blackGray text-white">
            <div>
              <RocketLaunchIcon class="w-6 sm:w-8 text-secondary mb-3" />
              <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight">
                Our Vision
              </h5>
            </div>
            <p class="mb-3 text-sm sm:text-base text-white">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
              tellus, luctus nec.
            </p>
          </div>
        </div>
  
        <!-- Meet the Team Button -->
        <div>
          <button
            type="button"
            class="uppercase text-white border-2 border-secondary font-semibold text-sm sm:text-md px-6 py-2 sm:px-8 sm:py-3 hover:bg-secondary hover:text-primary"
          >
            Meet the Team
          </button>
        </div>
      </div>
    </div>
  </section>
</template>
  
<script setup>
  import { EyeIcon, RocketLaunchIcon } from '@heroicons/vue/20/solid';
</script>
  