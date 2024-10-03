<template>
  <nav class="bg-primary">
    <div class="m-auto">
      <div class="flex justify-between items-center py-2">
        <div class="flex-shrink-0">
          <a href="#" class="text-xl font-bold text-white">
            <img src="/images/cross-digital.png" class="h-12 md:h-20" alt="logo" />
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
          <a href="#" class="bg-secondary text-primary px-4 py-2 text-sm font-medium mr-4 hover:bg-secondary hover:text-primary">
            Get Started
          </a>
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

    <!-- Mobile Menu -->
    <div v-if="isOpen" class="lg:hidden text-center bg-blackGray py-2">
      <a href="#home-banner" class="relative block px-4 py-2 text-sm text-white font-medium">
        <span class="underline-animation">Home</span>
      </a>
      <a href="#services" class="relative block px-4 py-2 text-sm text-white font-medium">
        <span class="underline-animation">Services</span>
      </a>
      <a href="#about-us" class="relative block px-4 py-2 text-sm text-white font-medium">
        <span class="underline-animation">About Us</span>
      </a>
      <a href="#industries" class="relative block px-4 py-2 text-sm text-white font-medium">
        <span class="underline-animation">Industries</span>
      </a>
      <a href="#testimonials" class="relative block px-4 py-2 text-sm text-white font-medium">
        <span class="underline-animation">Testimonials</span>
      </a>
      <a href="#contact-us" class="relative block px-4 py-2 text-sm text-white font-medium">
        <span class="underline-animation">Contact Us</span>
      </a>
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
