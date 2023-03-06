<template>
  <div class="h-full">
    <div
      class="relative w-full min-h-full bg-fixed bg-no-repeat bg-cover hero-section-img"
    >
      <div
        class="absolute top-0 left-0 right-0 z-20 bg-white bg-opacity-30"
      ></div>
      <div class="container left-0 right-0 z-40 pt-32 mx-auto top-48">
        <div
          class="grid w-full grid-cols-1 gap-4 px-2 md:gap-10 md:grid-cols-2 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3"
        >
          <div
            v-for="user in getUsers"
            :key="user.id"
            @click="openUserModal(user)"
          >
            <WeatherCard :user="user" class="my-5" />
          </div>
        </div>
      </div>

      <div
        v-if="getLastPage > getCurrentPage"
        class="flex items-center justify-center pb-5 my-10 first-letter:text-center"
      >
        <button
          @click="fetchUsers"
          :disabled="hasFetchingData"
          class="relative px-6 py-3 text-base font-medium text-center text-black bg-white rounded-lg shadow-md hover:bg-gray-200 hover:shadow-xl"
        >
          <BaseLoader v-if="hasFetchingData" />
          <span v-else>Load More </span>
        </button>
      </div>
    </div>

    <UserModal
      v-if="isOpen"
      :user-data="selectedUser"
      @hide-modal="isOpen = false"
    />
  </div>
</template>

<script setup>
import WeatherCard from "@/components/WeatherCard.vue";
import UserModal from "@/components/UserModal.vue";
import BaseLoader from "@/components/BaseLoader.vue";
import { storeToRefs } from "pinia";
import { useUserStore } from "../../stores/user";
import { reactive, ref } from "vue";

// define data
const isOpen = ref(false);
let selectedUser = ref({});

const { getUsers, hasFetchingData, getCurrentPage, getLastPage } = storeToRefs(
  useUserStore()
);
const { fetchUsers } = useUserStore();

//  fetch users data
fetchUsers();

function openUserModal(user) {
  selectedUser.value = user;
  isOpen.value = true;
}
</script>

<style>
.hero-section-img {
  background-image: url("../../images/cloudy-sky-img.jpg");
}
body,
html,
#app {
  height: 100%;
}
</style>
