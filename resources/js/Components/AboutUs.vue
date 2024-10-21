<template>
  <section id="about-us" class="relative">
    <div class="mt-32 lg:mt-52 grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-24 text-white items-center">
      <!-- Image Section -->
      <div class="relative group overflow-hidden rounded-lg shadow-lg">
        <img
          class="w-full h-64 sm:h-80 lg:h-full object-cover group-hover:scale-105 group-hover:grayscale-0 transition-all duration-700"
          src="/images/banner-laptop.jpg"
          alt="Cross Digital team working on a project"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
      </div>
      <!-- Text Section -->
      <div>
        <p class="text-secondary font-semibold tracking-wider uppercase">About Us</p>
        <h1 class="text-4xl md:text-5xl font-bold text-white leading-snug">
          We Love What We Do
        </h1>
        <p class="mt-4 text-sm md:text-base text-white">
          At Cross Digital, we are driven by a passion for innovation and excellence in the ever-evolving world of digital marketing. Our team crafts unique, data-driven strategies to help your business thrive in both online and traditional media landscapes.
        </p>
        <div class="rounded-lg text-darkGray shadow-lg py-6 md:py-8">
          <div class="relative flex justify-around mb-6">
            <div class="absolute bottom-0 left-0 transition-transform duration-300 px-2 lg:px-6" :style="{ width: activeTab === 'mission' ? 'calc(100% / 2)' : 'calc(100% / 2)', transform: activeTab === 'mission' ? 'translateX(0)' : 'translateX(100%)' }">
              <div class="border-b-2 border-secondary"></div>
            </div>

            <button @click="activeTab = 'mission'" :class="activeTab === 'mission' ? 'font-semibold' : ''" class="uppercase text-lg md:text-lg py-2 focus:outline-none">
              Mission
            </button>
            <button @click="activeTab = 'vision'" :class="activeTab === 'vision' ? 'font-semibold' : ''" class="uppercase text-lg md:text-lg py-2 focus:outline-none">
              Vision
            </button>
          </div>

          <!-- Content based on active tab -->
          <div v-if="activeTab === 'mission'" class="text-left">
            <p class="text-sm sm:text-base px-6 md:px-8">
              To empower businesses with cutting-edge digital marketing solutions, leading them to sustained growth and unmatched market dominance in the competitive digital landscape.
            </p>
          </div>
          <div v-if="activeTab === 'vision'" class="text-left">
            <p class="text-sm sm:text-base px-6 md:px-8">
              To deliver strategic, data-driven marketing solutions that transform our clients' brands, enhance their online visibility, drive traffic, and maximize ROI across digital and traditional media spaces.
            </p>
          </div>
        </div>
        <!-- Meet the Team Button -->
        <div class="mt-4">
          <button
            type="button"
            class="uppercase text-white border-2 border-secondary font-semibold text-sm sm:text-md px-6 py-2 sm:px-8 sm:py-3 rounded-md transition-colors hover:bg-secondary hover:text-black"
          >
            Meet the Team
          </button>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
  import { ref } from 'vue';
  // import { useHead } from '@vueuse/head';

  const appUrl = window.appConfig.appUrl;
  const activeTab = ref('mission');

  // SEO Metadata
  // useHead({
  //   title: 'About Us - Cross Digital | Digital Marketing Experts',
  //   meta: [
  //     { name: 'description', content: 'Learn more about Cross Digital, a leading digital marketing agency passionate about innovation and excellence.' },
  //     { property: 'og:title', content: 'About Us - Cross Digital' },
  //     { property: 'og:description', content: 'Discover how Cross Digital transforms visions into success through cutting-edge digital marketing solutions.' },
  //     { property: 'og:image', content: `${appUrl}/images/banner-laptop.jpg` },
  //     { property: 'og:url', content: `${appUrl}/#about-us` },
  //     { name: 'twitter:card', content: 'summary_large_image' },
  //     { name: 'twitter:title', content: 'About Us - Cross Digital' },
  //     { name: 'twitter:description', content: 'Learn more about Cross Digital, a leading digital marketing agency passionate about innovation and excellence.' },
  //     { name: 'twitter:image', content: `${appUrl}/images/banner-laptop.jpg` },
  //   ],
  // });
</script>

<style scoped>
.bg-blackGray {
  background-color: #1a1a1a;
}
</style>
