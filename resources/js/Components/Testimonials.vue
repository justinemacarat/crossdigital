<template>
    <section id="testimonials">
        <div class="mt-16 md:mt-28 text-white">
            <div class="w-full">
                <p class="text-secondary font-semibold">Testimonials</p>
                <h1 class="mt-4 text-3xl md:text-4xl lg:text-5xl font-medium leading-tight md:leading-[3rem]">
                    What people are saying
                </h1>
                <div class="lg:flex lg:flex-row mt-4">
                    <swiper
                    :pagination="{ clickable: true }"
                    :modules="[Pagination, Autoplay]"
                    :autoplay="{ delay: 3000, disableOnInteraction: false }" 
                    loop="true"
                    class="mt-4 testimonial-swiper"
                    >
                        <swiper-slide v-for="(testimonial, index) in testimonials" :key="index">
                            <div class="lg:flex lg:flex-row items-center">
                                <div class="flex justify-center">
                                    <font-awesome-icon
                                    :icon="['fas', 'quote-right']"
                                    class="text-secondary text-8xl mr-2"
                                    />
                                </div>
                                <div class="ml-4">
                                    <p class="text-white font-light text-sm md:text-base">
                                    {{ testimonial.quote }}
                                    </p>
                                    <p class="mt-2">{{ testimonial.author }}</p>
                                    <p class="text-sm text-secondary">{{ testimonial.position }}</p>
                                </div>
                            </div>
                        </swiper-slide>
                    </swiper>
                    <!-- Added a div for pagination control -->
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </div>
    </section>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { Swiper, SwiperSlide } from 'swiper/vue';
  import 'swiper/swiper-bundle.css'; // Import Swiper styles
  import 'swiper/css';
  
  import 'swiper/css/pagination';
  import 'swiper/css/navigation';
  import 'swiper/css/autoplay'; // Import autoplay styles
  
  // import required modules
  import { Pagination, Autoplay } from 'swiper/modules';
  
  const testimonials = ref([
    {
      quote:
        'Our services are Proin et mauris sed metus dictum tempor ut non turpis. Nullam non faucibus erat. Fusce convallis, nisl nec pulvinar sollicitudin, dui ipsum aliquam velit, nec dapibus quam diam eget metus. Nam malesuada nibh non velit varius, et luctus mi rhoncus.',
      author: 'Jacob Kornelius',
      position: 'CEO',
    },
    {
      quote:
        'Great service! I would highly recommend them to anyone looking for quality work.',
      author: 'Sarah Johnson',
      position: 'Project Manager',
    },
    {
      quote:
        'Their attention to detail is unmatched. Highly satisfied with the results.',
      author: 'Michael Smith',
      position: 'Creative Director',
    },
  ]);
  </script>
  
  <style>
    .swiper {
      display: flex;
      flex-direction: column;
    }
  
    .swiper-wrapper {
      flex-grow: 1;
    }
  
    .swiper-pagination {
      text-align: center;
      margin-top: 10px;
      z-index: 10;
      position: static;
    }
    .swiper-pagination-bullet {
      background: white;
    }
  
    .swiper-pagination-bullet-active {
      background: theme('colors.secondary.DEFAULT');
    }
  </style>
  