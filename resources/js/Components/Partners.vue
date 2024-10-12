<template>
  <section id="partners">
    <div class="mt-32 lg:mt-52 text-white">
      <!-- Heading Section -->
      <h1 class="my-4 text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-center">
        Our Partners already have Best in Venture Support.
      </h1>
    </div>
  
    <!-- Partners Logos Section -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6 justify-items-center">
      <img
        class="w-24 sm:w-32 md:w-44 object-cover"
        src="/images/partners/Darkle.png"
        alt="image description"
      />
      <img
        class="w-24 sm:w-32 md:w-44 object-cover"
        src="/images/partners/Dconsult.png"
        alt="image description"
      />
      <img
        class="w-24 sm:w-32 md:w-44 object-cover"
        src="/images/partners/Debite.png"
        alt="image description"
      />
      <img
        class="w-24 sm:w-32 md:w-44 object-cover"
        src="/images/partners/Ditech.png"
        alt="image description"
      />
      <img
        class="w-24 sm:w-32 md:w-44 object-cover"
        src="/images/partners/Energize.png"
        alt="image description"
      />
    </div>
  </section>
</template>

<script setup>
import { useHead } from '@vueuse/head';

const appUrl = import.meta.env.VITE_APP_URL;

// SEO Metadata
useHead({
  title: 'Our Partners - Cross Digital | Empowering Business Success',
  meta: [
    {
      name: 'description',
      content: 'Discover our valued partners at Cross Digital. We collaborate with industry leaders to provide the best venture support and innovative solutions for your business.',
    },
    {
      property: 'og:title',
      content: 'Our Partners - Cross Digital',
    },
    {
      property: 'og:description',
      content: 'Explore Cross Digital\'s partnerships with leading companies that enhance our capabilities and support our commitment to delivering excellence in digital marketing.',
    },
    {
      property: 'og:image',
      content: `${appUrl}/images/partners/Darkle.png`, 
    },
    {
      property: 'og:url',
      content: `${appUrl}/#partners`,
    },
    {
      name: 'twitter:card',
      content: 'summary_large_image',
    },
    {
      name: 'twitter:title',
      content: 'Our Partners - Cross Digital',
    },
    {
      name: 'twitter:description',
      content: 'Learn about Cross Digital\'s strategic partnerships with top companies, ensuring exceptional support and innovative solutions for our clients.',
    },
    {
      name: 'twitter:image',
      content: `${appUrl}/images/partners/Darkle.png`, 
    },
  ],
});
</script>