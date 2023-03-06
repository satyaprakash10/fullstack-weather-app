import { defineStore } from "pinia";

export const useUserStore = defineStore({
  id: "user",
  state: () => ({
    users: [],
    is_fetching_data: false,
    current_page: 1,
    last_page: 1,
  }),
  getters: {
    getUsers: (state) => state.users,
    hasFetchingData: (state) => state.is_fetching_data,
    getCurrentPage: (state) => state.current_page,
    getLastPage: (state) => state.last_page,
  },
  actions: {
    async fetchUsers() {
      this.is_fetching_data = true;
      const page = this.current_page + 1;
      const url = `http://localhost/user?page=${page}`;
      const apiResponse = await (await fetch(url)).json();
      this.users = [...this.users, ...apiResponse.users.data];
      this.current_page = apiResponse.users.current_page;
      this.last_page = apiResponse.users.last_page;
      this.is_fetching_data = false;
    },
  },
});
