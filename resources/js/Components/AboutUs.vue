<template>
  <section id="about-us">
    <div class="mt-32 lg:mt-52 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 text-white">
      <!-- Image Section -->
      <div class="flex justify-start">
        <img
          class="w-full h-48 sm:h-64 md:h-full object-cover"
          src="/images/banner-laptop.jpg"
          alt="Cross Digital team working on a project"
        />
      </div>

      <!-- Text Section -->
      <div class="flex flex-col justify-center">
        <p class="text-secondary font-semibold">About Us</p>
        <h1 class="mt-4 text-3xl sm:text-4xl md:text-5xl font-medium leading-tight sm:leading-snug md:leading-[3rem]">
          We Love what we Do
        </h1>
        <p class="mt-4 text-sm sm:text-base md:text-lg text-white">
          At Cross Digital, we are driven by a passion for innovation and excellence in the ever-evolving world of digital marketing. Our team crafts unique, data-driven strategies to help your business thrive in both online and traditional media landscapes. Every project we undertake is a commitment to transforming your vision into success, enhancing brand visibility and driving meaningful engagement.
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
              To empower businesses with cutting-edge digital marketing solutions, leading them to sustained growth and unmatched market dominance in the competitive digital landscape.
            </p>
          </div>
          <div class="p-6 sm:p-8 bg-blackGray text-white">
            <div>
              <RocketLaunchIcon class="w-6 sm:w-8 text-secondary mb-3" />
              <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight">
                Our Mission
              </h5>
            </div>
            <p class="mb-3 text-sm sm:text-base text-white">
              To deliver strategic, data-driven marketing solutions that transform our clients' brands, enhance their online visibility, drive traffic, and maximize ROI across digital and traditional media spaces.
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
import { useHead } from '@vueuse/head';
import { EyeIcon, RocketLaunchIcon } from '@heroicons/vue/20/solid';

const appUrlDev = import.meta.env.VITE_APP_URL_DEV;

// SEO Metadata
useHead({
  title: 'About Us - Cross Digital | Digital Marketing Experts',
  meta: [
    {
      name: 'description',
      content: 'Learn more about Cross Digital, a leading digital marketing agency passionate about innovation and excellence. We craft data-driven strategies to empower businesses.',
    },
    {
      property: 'og:title',
      content: 'About Us - Cross Digital',
    },
    {
      property: 'og:description',
      content: 'Discover how Cross Digital transforms visions into success through cutting-edge digital marketing solutions.',
    },
    {
      property: 'og:image',
      content: `${appUrlDev}/images/banner-laptop.jpg`
    },
    {
      property: 'og:url',
      content: `${appUrlDev}/#about-us`,
    },
    {
      name: 'twitter:card',
      content: 'summary_large_image',
    },
    {
      name: 'twitter:title',
      content: 'About Us - Cross Digital',
    },
    {
      name: 'twitter:description',
      content: 'Learn more about Cross Digital, a leading digital marketing agency passionate about innovation and excellence.',
    },
    {
      name: 'twitter:image',
      content: `${appUrlDev}/images/banner-laptop.jpg`, 
    },
  ],
});
</script>
