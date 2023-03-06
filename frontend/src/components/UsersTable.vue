<script>
export default {
  data: () => ({
    users: null,
    selectedUser: null,
    isOpen: false,
  }),

  created() {
    this.fetchData();
  },

  methods: {
    async fetchData() {
      const url = "http://localhost/user";
      const apiResponse = await (await fetch(url)).json();
      this.users = apiResponse.users;
    },
    openUserModal(user) {
      this.selectedUser = user;
      this.isOpen = true;
    },
  },
};
</script>

<template>
  <div>
    <div v-if="!users">Pinging the api...</div>

    <div v-if="users">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div
          class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900"
        >
          <label for="table-search" class="sr-only">Search</label>
          <div class="relative">
            <div
              class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
            >
              <svg
                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <input
              type="text"
              id="table-search-users"
              class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Search for users"
            />
          </div>
        </div>
        <table
          class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
          <thead
            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
          >
            <tr>
              <th scope="col" class="px-6 py-3">Name</th>
              <th scope="col" class="px-6 py-3">Position</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="user in users"
              :key="user.id"
              @click="openUserModal(user)"
              class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
            >
              <td
                scope="row"
                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
              >
                <!-- <img
                class="w-10 h-10 rounded-full"
                src="/docs/images/people/profile-picture-1.jpg"
                alt="Jese image"
              /> -->
                <div class="pl-3">
                  <div class="text-base font-semibold">{{ user.name }}</div>
                  <div class="font-normal text-gray-500">
                    {{ user.email }}
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <span v-if="user.weather && user.weather.weather"
                  >Temprature: {{ user.weather.weather.main.temp }} C</span
                ><br />
                <span v-if="user.weather && user.weather.weather"
                  >Humidity: {{ user.weather.weather.main.humidity }} %</span
                ><br />
                <span v-if="user.weather && user.weather.weather"
                  >Visibility: {{ user.weather.weather.main.pressure }} m</span
                ><br />
                <span v-if="user.weather && user.weather.weather"
                  >Wind Speed:
                  {{ user.weather.weather.wind.speed }} meter/sec</span
                >
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
