import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import Users from "../views/users/Index.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView,
    },
    {
      path: "/users",
      name: "users",
      component: Users,
    },
  ],
});

export default router;
