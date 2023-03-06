<template>
  <div class="relative bottom-0 w-full h-20 bg-black backdrop-blur-lg">
    <div class="container flex items-center justify-between pt-6 mx-auto">
      <div class="">
        <ul
          class="space-y-4 text-base text-white cursor-pointer md:space-y-0 md:space-x-10 md:flex item-center"
        >
          <li
            class="transition-all ease-in transform hover:text-gray-900 duration-400 hover:scale-110"
          >
            Weather
          </li>
          <li
            class="transition-all ease-in transform hover:text-gray-900 duration-400 hover:scale-110"
          >
            About
          </li>
          <li
            class="transition-all ease-in transform hover:text-gray-900 duration-400 hover:scale-110"
          >
            Temperature
          </li>
        </ul>
      </div>

      <div class="items-center mb-2 sm:mt-0 md:flex">
        <span class="pr-2 text-sm text-white s"> 2023 </span>
        <a
          class="text-base text-white cursor-pointer hover:text-blue-500"
          href="#"
        >
          www.weather.co
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
};
</script>

<style scoped></style>
