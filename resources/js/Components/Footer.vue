<template>
  <div class="bg-blackGray mt-32 lg:mt-52">
    <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 container px-16 md:px-20 pt-20 pb-12">
      <!-- First Column: Content and Social Media -->
      <div class="col-span-1 md:col-span-2 lg:col-start-1 lg:col-end-3 flex flex-col lg:justify-between mb-8 md:mb-0">
        <p class="text-white text-lg font-bold">Cross Digital - Digital Marketing</p>
        <p class="text-white text-sm mt-4">
          Our agency is dedicated to sparking innovation, creativity, and growth in the digital realm.
        </p>
        <div class="flex mt-4">
          <a href="https://twitter.com" target="_blank">
            <font-awesome-icon :icon="['fab', 'x-twitter']" class="text-secondary text-2xl mr-6" />
          </a>
          <a href="https://instagram.com" target="_blank">
            <font-awesome-icon :icon="['fab', 'instagram']" class="text-secondary text-2xl mr-6" />
          </a>
          <a href="https://facebook.com" target="_blank">
            <font-awesome-icon :icon="['fab', 'facebook-f']" class="text-secondary text-xl mr-6" />
          </a>
        </div>
      </div>

      <!-- Second Column: Collapsible Sections -->
      <div class="col-span-1 md:col-end-5 md:col-span-1 lg:col-end-8 lg:col-span-3">
        <div class="grid grid-cols-1 lg:grid-cols-3">
          <!-- Company Section -->
          <div class="text-white">
            <h3 @click="toggleCompany" class="text-sm font-bold mb-5 cursor-pointer flex justify-between">
              Company
              <span class="lg:hidden">{{ isCompanyOpen ? '−' : '+' }}</span>
            </h3>
            <ul v-show="isCompanyOpen" class="text-white text-sm transition-all duration-300 ease-in-out mb-6 lg:mb-0">
              <li class="mt-3">
                <a href="#" class="hover:underline">About Us</a>
              </li>
              <li class="mt-3">
                <a href="#" class="hover:underline">Blogs</a>
              </li>
              <!-- <li class="mt-3">
                <a href="#" class="hover:underline">Works</a>
              </li>
              <li class="mt-3">
                <a href="#" class="hover:underline">Careers</a>
              </li> -->
            </ul>
          </div>

          <!-- Help Section -->
          <div class="text-white">
            <h3 @click="toggleHelp" class="text-sm font-bold mb-5 cursor-pointer flex justify-between">
              Help
              <span class="lg:hidden">{{ isHelpOpen ? '−' : '+' }}</span>
            </h3>
            <ul v-show="isHelpOpen" class="text-white text-sm transition-all duration-300 ease-in-out mb-6 lg:mb-0">
              <!-- <li class="mt-3">
                <a href="#" class="hover:underline">Customer Support</a>
              </li> -->
              <li class="mt-3">
                <a href="#" class="hover:underline">Terms & Conditions</a>
              </li>
              <li class="mt-3">
                <a href="#" class="hover:underline">Privacy Policy</a>
              </li>
              <!-- <li class="mt-3">
                <a href="#" class="hover:underline">Payments</a>
              </li> -->
            </ul>
          </div>

          <!-- Another Company Section -->
          <!-- <div class="text-white">
            <h3 @click="toggleCompany2" class="text-sm font-bold mb-5 cursor-pointer flex justify-between">
              Company
              <span class="lg:hidden">{{ isCompany2Open ? '−' : '+' }}</span>
            </h3>
            <ul v-show="isCompany2Open" class="text-white text-sm transition-all duration-300 ease-in-out mb-6 lg:mb-0">
              <li class="mt-3">
                <a href="#" class="hover:underline">About Us</a>
              </li>
              <li class="mt-3">
                <a href="#" class="hover:underline">Blogs</a>
              </li>
              <li class="mt-3">
                <a href="#" class="hover:underline">Works</a>
              </li>
              <li class="mt-3">
                <a href="#" class="hover:underline">Careers</a>
              </li>
            </ul>
          </div> -->
        </div>
      </div>
      <hr class="border-t border-gray-600 col-span-full mt-8">
      <p class="text-white text-xs mt-8 text-center col-span-full">© Copyright2024. All rights reserved by Cross Digital.</p>
    </div>
  </div>
</template>

<script setup>
    import { ref, onMounted, onBeforeUnmount } from 'vue'

    // Toggle state for the collapsible sections
    const isCompanyOpen = ref(false)
    const isHelpOpen = ref(false)
    const isCompany2Open = ref(false)

    // Toggle functions
    const toggleCompany = () => {
    isCompanyOpen.value = !isCompanyOpen.value
    }

    const toggleHelp = () => {
    isHelpOpen.value = !isHelpOpen.value
    }

    const toggleCompany2 = () => {
    isCompany2Open.value = !isCompany2Open.value
    }

    // Update footer nav on screen resize
    // Always open on large screens, reset on smaller screens
    const handleResize = () => {
    const screenWidth = window.innerWidth

    if (screenWidth >= 1024) {
        // Large screens, keep all sections open
        isCompanyOpen.value = true
        isHelpOpen.value = true
        isCompany2Open.value = true
    } else {
        isCompanyOpen.value = false
        isHelpOpen.value = false
        isCompany2Open.value = false
    }
    }

    onMounted(() => {
    handleResize() // Check initial screen size
    window.addEventListener('resize', handleResize) // Listen for window resizing
    })

    onBeforeUnmount(() => {
    window.removeEventListener('resize', handleResize) // Cleanup listener when component unmounts
    })
</script>