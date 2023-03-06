<template>
  <div
    id="nav"
    class="z-40 px-4 transition-all duration-500 ease-in sm:px-20"
    :class="{ 'bg-opacity-30 backdrop-blur-lg bg-gray-900': active }"
  >
    <!-- logo -->
    <div
      id="nav-container"
      :class="toggleNavClass()"
      class="items-center justify-between px-4 py-5 md:flex wrapper lg:px-10"
    >
      <!-- Site logo -->
      <div class="flex justify-between">
        <a
          href="/"
          :class="{ 'text-black': active }"
          class="p-3 text-2xl italic font-extrabold text-indigo-700 transition-all transform border border-black hover:scale-90 duration-400 md:text-4xl"
        >
          Vue | Weather
        </a>

        <!-- Mobile Hamburger Icon -->
        <div
          class="block text-white transition-all cursor-pointer md:hidden hover:indigo-500 duration-400"
          @click="toggleMobileNav = !toggleMobileNav"
        >
          <img
            v-if="toggleMobileNav"
            src="../../svg/x-icon.svg"
            @click="toggleMobileNav"
            class="text-black transition-all ease-in transform h-14 duration-400 hover:text-indigo-900 hover:rotate-45"
            alt=""
          />
        </div>

        <div
          v-if="!toggleMobileNav"
          class="flex justify-end block text-white transition-all cursor-pointer md:hidden hover:indigo-500 duration-400"
          @click="toggleMobileNav = !toggleMobileNav"
        >
          <svg viewBox="0 0 100 80" width="40" height="40">
            <rect width="100" height="20"></rect>
            <rect y="30" width="100" height="20"></rect>
            <rect y="60" width="100" height="20"></rect>
          </svg>
        </div>
      </div>

      <!-- Dekstop Menu items -->
      <div class="hidden md:block">
        <ul
          class="flex items-center justify-end space-x-10 text-base font-medium uppercase list-none md:text-xl"
        >
          <li
            class="p-3 transition-all duration-500 ease-in transform rounded-md cursor-pointer hover:text-gray-900 hover:bg-white hover:rounded-md hover:shadow-xl"
            @click="$router.push('/')"
          >
            Home
          </li>
          <li
            class="p-3 transition-all duration-500 ease-in transform rounded-md cursor-pointer hover:text-gray-900 hover:bg-white hover:rounded-md hover:shadow-xl"
            @click="$router.push('/users')"
          >
            Users
          </li>
        </ul>
      </div>
    </div>

    <!-- Mobile First Menu -->
    <div
      v-show="toggleMobileNav == true"
      class="block transition-all duration-500 ease-in-out transform scale-90 md:hidden"
    >
      <ul
        class="px-2 py-4 text-base font-medium uppercase list-none bg-blue-50 md:text-xl"
      >
        <li
          class="p-4 transition-all duration-500 ease-in transform rounded-md cursor-pointer hover:text-gray-900 hover:bg-blue-400 hover:rounded-md hover:shadow-xl"
          @click="$router.push('/')"
        >
          Home
        </li>
        <li
          class="p-3 transition-all duration-500 ease-in transform rounded-md cursor-pointer hover:text-gray-900 hover:bg-blue-400 hover:rounded-md hover:shadow-xl"
          @click="$router.push('/users')"
        >
          Users
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return { active: false, toggleMobileNav: false };
  },

  methods: {
    toggleNavClass() {
      if (this.active == false) {
        return "nav";
      } else {
        return "sticky-nav";
      }
    },
  },
  mounted() {
    window.document.onscroll = () => {
      let navBar = document.getElementById("nav");
      if (window.scrollY > navBar.offsetTop) {
        this.active = true;
      } else {
        this.active = false;
      }
    };
  },
};
</script>

<style scoped>
body {
  margin: 0;
  box-sizing: border-box;
}

#app {
  color: #2c3e50;
  background-color: #ccd6dd;
  height: 120vh;
}

a {
  font-weight: bold;
  color: white;
  text-decoration: none;
  margin: 0 1vw;
}

a:hover {
  transition: linear 100ms;
  color: red;
  transition: 400ms ease-in-out;
}

/* two classes, decided on scroll */
.nav {
  transition: 100ms;
  padding: 25px;
}

.sticky-nav {
  transition: 100ms;
  padding: 20px;
}

#nav {
  width: 100%;
  /* background-color: transparent; */
  position: fixed;
  top: 0;
}

/* have to add the ID nav (#nav) otherwise the backgrnd color won't change as the previous background color is set in an ID and ID trumps class notation */
#nav.sticky {
  transition: 400ms ease-in-out;
  transition-property: all;
  transform: scaleY(0.9);
  box-shadow: 0px 15px 10px -15px #111;
}
</style>
