<script setup lang="ts">
import WeatherSlideShow from "@/components/WeatherSlideShow.vue";
import TheSiteFooter from "@/components/TheSiteFooter.vue";
// import UsersTable from "@/components/UsersTable.vue";
</script>

<template>
  <main class="relative bg-blue-200 bg-opacity-50">
    <!-- Hero Section -->
    <div class="w-full bg-no-repeat bg-cover hero-section-img">
      <div class="container w-full py-40 mx-auto">
        <div
          class="justify-between px-10 py-20 mt-12 border-4 border-white md:mt-24 rounded-3xl sm:flex"
        >
          <img
            data-aos="fade-up"
            data-aos-duration="1000"
            src="../../images/rainy-day.png"
            class="absolute h-40 top-40 opacity-70"
            alt=""
          />
          <div data-aos="fade-right" data-aos-duration="1000">
            <h1
              class="text-2xl font-bold leading-relaxed text-white sm:font-medium sm:mt-24 sm:text-6xl"
            >
              Smart Convenient
              <br />
              Weather Assistant For
              <br />
              Your Website.
            </h1>
            <p class="mt-4 text-lg font-medium leading-relaxed text-gray-200">
              Yet too oftern some very human cultural artifacts really lead the
              business down the certain routes.
            </p>
          </div>

          <div
            class="mt-2 animate-weather sm:mt-0"
            data-aos="fade-left"
            data-aos-duration="1000"
          >
            <img
              src="../../svg/weather-info.svg"
              alt=""
              class="w-full h-auto transition-all duration-500 ease-in transform sm:-mt-3 animate-weather sm:h-72 hover:scale-90"
            />
          </div>
        </div>
      </div>

      <!-- Weather Slide Show -->
      <WeatherSlideShow class="-mt-6" />
    </div>

    <!-- Weather Illustration Section -->
    <div
      class="container items-center justify-between mx-auto mt-44 sm:flex sm:pt-72"
    >
      <img
        src="../../svg/weather-cloud.svg"
        alt=""
        class="h-64"
        data-aos="zoom-in-right"
        data-aos-duration="1000"
      />
      <div
        data-aos="zoom-in-left"
        data-aos-duration="1000"
        class="flex items-center p-6 mt-10 bg-gray-100 rounded-md shadow-lg sm:mt-0"
      >
        <img
          src="../../images/weather-app.png"
          class="h-24 pb-4 pr-4 md:-mt-2 md:pb-0 md:h-40"
          alt=""
        />
        <div class="">
          <div class="flex justify-end">
            <div>
              <h3 class="text-xl font-extrabold text-gray-900 md:text-5xl">
                4
                <span class="absolute text-lg font-medium">0</span>
              </h3>
              <p class="text-sm font-medium text-gray-400 md:text-lg">
                Temperature
              </p>
            </div>
          </div>
          <p
            class="max-w-xl mx-auto mt-2 text-base text-right text-gray-900 sm:mt-4 md:flex front-medium sm:text-lg"
          >
            Weather & Forecast Application
          </p>
        </div>
      </div>
    </div>

    <hr class="container mx-auto mt-20 border-black border-1 opacity-10" />

    <div
      class="container items-center justify-between mx-auto mt-12 mb-20 sm:flex sm:mt-20"
    >
      <div
        class="flex p-6 bg-gray-100 rounded-md shadow-lg"
        data-aos="zoom-in-right"
        data-aos-duration="1000"
      >
        <div class="">
          <div class="flex justify-start">
            <div>
              <h3 class="text-xl font-extrabold text-gray-900 md:text-5xl">
                24 <span class="text-lg">%</span>
              </h3>
              <p class="text-sm font-medium text-gray-400 md:text-lg">
                Humidity
              </p>
            </div>
          </div>
          <p
            class="max-w-lg mx-auto mt-2 text-base text-left text-gray-900 sm:mt-4 md:flex front-medium sm:text-lg"
          >
            Use weather web site and get weather information daily and daily.
            Download weather forecast for free and experience.
          </p>
        </div>
        <img
          data-aos="zoom-in-left"
          data-aos-duration="1000"
          src="../../images/rainy.png"
          class="h-24 pt-4 md:pt-0 md:h-40"
          alt=""
        />
      </div>
      <img
        src="../../svg/rainy.svg"
        alt=""
        class="h-64 mt-10 sm:mt-0"
        data-aos="zoom-in-left"
        data-aos-duration="1000"
      />
    </div>

    <!-- User Section -->
    <div class="container w-full mx-auto">
      <!-- <UsersTable /> -->
    </div>

    <!-- The Site Footer   -->
    <TheSiteFooter />
  </main>
</template>

<style scoped>
.hero-section-img {
  background-image: url("../../images/clear-sky-img.jpg");
  height: 1100px;
  top: 0;
}
.animate-weather {
  animation-direction: alternate;
  animation-delay: 400s;
  animation-delay: 250ms;
}
</style>
