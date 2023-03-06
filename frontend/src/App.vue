<script setup lang="ts">
import { RouterLink, RouterView } from "vue-router";
import TheSiteNavbar from "./components/TheSiteNavbar.vue";
</script>

<template>
  <div class="h-full">
    <!-- the site header -->
    <TheSiteNavbar />

    <!-- the site main view page -->
    <main class="h-full">
      <RouterView />
    </main>
  </div>
</template>

<style scoped></style>
