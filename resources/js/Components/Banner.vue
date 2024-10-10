<template>
    <section id="home-banner" class="relative">
      <div class="relative z-10 text-white">
        <div class="flex flex-col justify-center">
          <h1 class="mb-6 text-3xl md:text-6xl uppercase font-medium leading-9 md:leading-[4.5rem]">
            Ignite Your Brand’s Digital Evolution
          </h1>
          <p class="mb-8 font-light text-sm md:text-base">
            Step into the future of marketing with Cross Digital, where innovation meets strategy, and your success story takes flight. Our expert team crafts tailored solutions to enhance your online presence.
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
      </div>
    </section>
  </template>
  
  <script setup>
  import { useHead } from '@vueuse/head';

  const appUrlDev = import.meta.env.VITE_APP_URL_DEV;
  // SEO Metadata
  useHead({
    title: 'Cross Digital | Ignite Your Brand’s Digital Evolution',
    meta: [
      {
        name: 'description',
        content: 'Discover Cross Digital, where innovation meets strategy to elevate your brand’s online presence. Ignite your digital evolution today!',
      },
      {
        property: 'og:title',
        content: 'Cross Digital | Ignite Your Brand’s Digital Evolution',
      },
      {
        property: 'og:description',
        content: 'Step into the future of marketing with Cross Digital, where your success story takes flight through tailored digital solutions.',
      },
      {
        property: 'og:image',
        content:  `${appUrlDev}/images/home-banner.jpg`, 
      },
      {
        property: 'og:url',
        content:  `${appUrlDev}`,
      },
      {
        name: 'twitter:card',
        content: 'summary_large_image',
      },
      {
        name: 'twitter:title',
        content: 'Cross Digital | Ignite Your Brand’s Digital Evolution',
      },
      {
        name: 'twitter:description',
        content: 'Join Cross Digital to elevate your brand’s presence with innovative digital marketing strategies tailored for your success.',
      },
      {
        name: 'twitter:image',
        content:  `${appUrlDev}/images/home-banner.jpg`,
      },
    ],
  });
  </script>
  