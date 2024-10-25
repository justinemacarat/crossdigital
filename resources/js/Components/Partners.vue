<template>
  <section id="partners">
    <div class="mt-32 lg:mt-52 text-white">
      <!-- Heading Section -->
      <h1 class="my-4 text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-center">
        Our Partners already have Best in Venture Support.
      </h1>
    </div>

    <!-- Partners Logos Section with Vue3Marquee -->
    <Vue3Marquee>
      <div class="partners-logos grid grid-cols-2 sm:grid-cols-3 md:grid-cols-7 gap-6 justify-items-center ">
        <img
          class="logo"
          src="/images/partners/Elite.png"
          alt="Elite"
        />
        <img
          class="logo"
          src="/images/partners/STM.png"
          alt="Smooth Torque Marine"
        />
        <img
          class="logo"
          src="/images/partners/Mackay.png"
          alt="Mackay Marine"
        />
        <img
          class="logo"
          src="/images/partners/Articfox.png"
          alt="Arctic Fox Cleaning"
        />
        <img
          class="logo"
          src="/images/partners/Merlin.png"
          alt="Merlin Bookkeeping"
        />
        <img
          class="logo"
          src="/images/partners/Clovers.png"
          alt="Clovers Volleyball Club"
        />
        <img
          class="logo mr-16"
          src="/images/partners/Voxstudio.png"
          alt="Vox Studio"
        />
      </div>
    </Vue3Marquee>
  </section>
</template>

<script setup>
//import { useHead } from '@vueuse/head';
import { Vue3Marquee } from 'vue3-marquee'

const appUrl = import.meta.env.VITE_APP_URL;

// SEO Metadata
// useHead({
//   title: 'Our Partners - Cross Digital | Empowering Business Success',
//   meta: [
//     {
//       name: 'description',
//       content: 'Discover our valued partners at Cross Digital. We collaborate with industry leaders to provide the best venture support and innovative solutions for your business.',
//     },
//     {
//       property: 'og:title',
//       content: 'Our Partners - Cross Digital',
//     },
//     {
//       property: 'og:description',
//       content: 'Explore Cross Digital\'s partnerships with leading companies that enhance our capabilities and support our commitment to delivering excellence in digital marketing.',
//     },
//     {
//       property: 'og:image',
//       content: `${appUrl}/images/partners/Darkle.png`,
//     },
//     {
//       property: 'og:url',
//       content: `${appUrl}/#partners`,
//     },
//     {
//       name: 'twitter:card',
//       content: 'summary_large_image',
//     },
//     {
//       name: 'twitter:title',
//       content: 'Our Partners - Cross Digital',
//     },
//     {
//       name: 'twitter:description',
//       content: 'Learn about Cross Digital\'s strategic partnerships with top companies, ensuring exceptional support and innovative solutions for our clients.',
//     },
//     {
//       name: 'twitter:image',
//       content: `${appUrl}/images/partners/Darkle.png`,
//     },
//   ],
// });
</script>

<style scoped>
.partners-logos {
  display: flex;
  gap: 6rem;
}

.logo {
  width: auto;
  height: 6rem; /* Adjust this value for smaller logos */
  object-fit: contain;
}

</style>
