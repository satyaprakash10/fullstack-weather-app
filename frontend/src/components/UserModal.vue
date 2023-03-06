<script>
export default {
  props: {
    userData: {
      required: true,
      type: Object,
      default: null,
    },
  },
  computed: {
    weather() {
      return this.userData.weather.weather;
    },
  },
  methods: {
    hideModal() {
      this.$emit("hideModal", true);
    },
  },
};
</script>
<template>
  <div>
    <div
      modal-backdrop=""
      @click="hideModal"
      class="fixed inset-0 z-40 bg-gray-200 bg-opacity-50 dark:bg-opacity-80"
    ></div>
    <!-- Main modal -->
    <div
      class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-x-0 h-[calc(100%-1rem)] md:h-full"
    >
      <div class="relative w-full h-full max-w-4xl mx-auto md:h-auto">
        <div
          class="w-full h-auto max-w-5xl px-8 py-6 mx-auto mt-10 bg-gray-900 bg-opacity-80 md:mt-24 rounded-3xl"
        >
          <div class="">
            <button
              type="button"
              @click="hideModal"
              class="text-gray-400 absolute right-3 top-3 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            >
              <svg
                class="w-7 h-7"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <div class="items-center justify-between">
              <div
                class="flex items-center justify-center order-1 items- lg:order-none lg:jusify-auto lg:text-right"
              >
                <img
                  :src="`http://openweathermap.org/img/wn/${userData.weather.weather.weather[0].icon}@4x.png`"
                  class="w-40 h-40"
                  alt=""
                />

                <h3
                  class="z-10 mt-3 mb-0 text-4xl font-bold text-white md:text-8xl"
                >
                  <span>{{ weather.main.temp }} &deg; C</span>
                </h3>
                <small
                  class="pl-4 -mt-4 text-lg font-medium text-center text-gray-200"
                >
                  {{ userData.weather.main }}
                </small>
              </div>

              <div class="text-center">
                <h6 class="text-base font-medium text-white md:text-xl">
                  {{ userData.name }}
                </h6>
                <h6 class="mt-2 text-base font-normal text-white">
                  {{ userData.email }}
                </h6>
              </div>
            </div>

            <hr class="mx-auto mt-10 mb-6 text-gray-200 opacity-30" />

            <div class="grid grid-cols-2 mt-4 space-x-10">
              <div class="pr-6 border-r border-white border-opacity-20">
                <div class="w-full">
                  <div class="flex items-center justify-between mb-2">
                    <span class="text-white">Min Temp</span
                    ><small class="inline-block px-2 text-white"
                      >{{ weather.main.temp_min }}&nbsp;&deg; C</small
                    >
                  </div>
                </div>
                <div class="w-full">
                  <div class="flex items-center justify-between mb-2">
                    <span class="text-white">Feels like</span
                    ><small class="inline-block px-2 text-white"
                      >{{ weather.main.feels_like }}&nbsp;&deg; C</small
                    >
                  </div>
                </div>
                <div class="flex items-center justify-between mb-2">
                  <span class="text-white">Humidity</span
                  ><small class="inline-block px-2 text-white"
                    >{{ weather.main.humidity }}&nbsp;%</small
                  >
                </div>
              </div>
              <div class="">
                <div class="w-full">
                  <div class="flex items-center justify-between mb-2">
                    <span class="text-white">Temp Max</span
                    ><small class="inline-block px-2 text-white"
                      >{{ weather.main.temp_max }}&nbsp;&deg;C</small
                    >
                  </div>
                </div>
                <div class="w-full">
                  <div class="flex items-center justify-between mb-2">
                    <span class="text-white">Wind Speed</span
                    ><small class="inline-block px-2 text-white"
                      >{{ weather.wind.speed }}&nbsp; m/s</small
                    >
                  </div>
                </div>
                <div class="flex items-center justify-between mb-2">
                  <span class="text-white">Pressure</span
                  ><small class="inline-block px-2 text-white"
                    >{{ weather.main.pressure }}&nbsp;hPa</small
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
