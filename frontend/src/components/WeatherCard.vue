<template>
  <div
    class="relative w-full min-w-0 mb-4 overflow-hidden text-white break-words transition-all duration-500 ease-in transform bg-gray-900 shadow-sm shadow-2xl cursor-pointer hover:scale-110 hover:shadow-3xl rounded-3xl bg-opacity-30 backdrop-blur-lg"
  >
    <div class="relative px-5 py-6">
      <div class="mb-4 md:space-x-6 lg:flex-row">
        <div
          class="flex justify-center order-1 lg:order-none lg:jusify-auto lg:text-right"
        >
          <img
            :src="`http://openweathermap.org/img/wn/${user.weather.weather.weather[0].icon}@4x.png`"
            class="w-20 h-20"
            alt=""
          />

          <h3
            v-if="user.weather"
            class="z-10 mt-3 mb-0 text-4xl font-bold text-white md:text-6xl"
          >
            <span>{{ user.weather.weather.main.temp }}&deg;C</span>
          </h3>
          <small class="font-medium text-center text-gray-200">
            {{ user.weather.main }}
          </small>
        </div>
        <div class="order-2 mt-4 text-center lg:order-none">
          <h5 class="mb-0 text-xl font-medium">{{ user.name }}</h5>
          <p class="mt-2 text-sm md:text-base text-medium">
            {{ user.email }}
          </p>
        </div>
      </div>

      <hr class="mx-auto mt-2 mb-2 text-gray-200 opacity-30" />

      <div v-if="user.weather" class="grid grid-cols-2 mt-4">
        <div class="pr-2 border-r border-white border-opacity-20">
          <div class="w-full">
            <div class="flex items-center justify-between mb-2">
              <span>Wind Speed</span>
              <small class="inline-block px-2">
                {{ user.weather.weather.wind.speed }}&nbsp; m/s</small
              >
            </div>
          </div>
        </div>
        <div class="w-full pl-6">
          <div class="flex items-center justify-between mb-2">
            <span>Humidity</span
            ><small class="inline-block px-2"
              >{{ user.weather.weather.main.humidity }}&nbsp;%</small
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    user: {
      required: true,
      type: Object,
      default: null,
    },
  },
  data() {
    return {};
  },
};
</script>

<style scoped></style>
