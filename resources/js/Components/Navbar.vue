<template>
  <nav class="bg-primary fixed top-0 left-0 right-0 z-50 px-12">
    <div class="m-auto">
      <div class="flex justify-between items-center py-2">
        <div class="flex-shrink-0">
          <a href="#" class="text-xl font-bold text-white">
            <img src="/images/cross-digital-full-white.png" class="h-16 md:h-20" alt="logo" />
          </a>
        </div>

        <!-- Desktop Navigation Links (Visible on medium screens and larger) -->
        <div class="hidden lg:flex space-x-8">
          <a href="#home-banner" class="text-white font-medium">
            <span class="underline-animation">Home</span>
          </a>
          <a href="#services" class="text-white hover:text-white font-medium">
            <span class="underline-animation">Services</span>
          </a>
          <a href="#about-us" class="text-white hover:text-white font-medium">
            <span class="underline-animation">About Us</span>
          </a>
          <a href="#industries" class="text-white hover:text-white font-medium">
            <span class="underline-animation">Industries</span>
          </a>
          <a href="#testimonials" class="text-white hover:text-white font-medium">
            <span class="underline-animation">Testimonials</span>
          </a>
          <a href="#blogs" class="text-white hover:text-white font-medium">
            <span class="underline-animation">Blogs</span>
          </a>
          <a href="#contact-us" class="text-white hover:text-white font-medium">
            <span class="underline-animation">Contact Us</span>
          </a>
        </div>

        <!-- Get Started Button (Visible on mobile and desktop) -->
        <div class="lg:hidden flex items-center">
          <button @click="toggleMenu" class="text-secondary hover:text-white focus:outline-none">
            <Bars3Icon class="size-6" />
          </button>
        </div>

        <!-- Get Started Button (Visible on desktop) -->
        <div class="hidden lg:block">
          <a href="#" class="bg-secondary text-primary px-4 py-2 text-sm font-medium hover:bg-secondary hover:text-primary">Get Started</a>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div  class="lg:hidden fixed top-18 right-0 w-full h-full bg-black transition-transform transform h-[calc(100vh-70px)]" :class="{'translate-x-0 transition-transform': isOpen, 'translate-x-full': !isOpen}">
      <div class="flex flex-col h-full p-12">
        <a href="#home-banner" class="relative block px-4 py-2 text-md text-white font-medium" @click="toggleMenu">
          <span class="underline-animation">Home</span>
        </a>
        <hr>
        <a href="#services" class="relative block px-4 py-2 mt-3 text-md text-white font-medium" @click="toggleMenu">
          <span class="underline-animation">Services</span>
        </a>
        <hr>
        <a href="#about-us" class="relative block px-4 py-2 mt-3 text-md text-white font-medium" @click="toggleMenu">
          <span class="underline-animation">About Us</span>
        </a>
        <hr>
        <a href="#industries" class="relative block px-4 py-2 mt-3 text-md text-white font-medium" @click="toggleMenu">
          <span class="underline-animation">Industries</span>
        </a>
        <hr>
        <a href="#testimonials" class="relative block px-4 py-2 mt-3 text-md text-white font-medium" @click="toggleMenu">
          <span class="underline-animation">Testimonials</span>
        </a>
        <hr>
        <a href="#contact-us" class="relative block px-4 py-2 mt-3 text-md text-white font-medium" @click="toggleMenu">
          <span class="underline-animation">Contact Us</span>
        </a>
        <hr>                  
        <a href="#contact-us" class="relative block px-4 py-2 mt-8 text-center text-md text-black font-medium bg-secondary hover:bg-secondary hover:text-primary" @click="toggleMenu">
          Get Started
        </a>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref } from 'vue';
import { Bars3Icon } from '@heroicons/vue/20/solid';

const isOpen = ref(false);

const toggleMenu = () => {
  isOpen.value = !isOpen.value;
};
</script>

<style scoped>
.transition-transform {
  transition: transform 0.3s ease-in-out;
}
</style>
