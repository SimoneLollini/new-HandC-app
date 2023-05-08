import { createRouter, createWebHistory } from "vue-router";

import Home from "../components/Home.vue";

const routes = [
  { path: "/", name: "Home", component: Home },
  {
    path: "/login",
    name: "Login",
    component: () => import("../components/Login.vue"),
  },
  {
    path: "/register",
    name: "Register",
    component: () => import("../components/Register.vue"),
  },
  {
    path: "/forgot-password",
    name: "ForgotPassword",
    component: () => import("../components/ForgotPassword.vue"),
  },
  {
    path: "/password-reset/:token",
    name: "ResetPassword",
    component: () => import("../components/ResetPassword.vue"),
  },
  {
    path: "/blocks/:id",
    name: "BlockView",
    component: () => import("../views/BlockView.vue"),
  },
  {
    path: "/blocks",
    name: "BlockListView",
    component: () => import("../views/BlockListView.vue"),
  },
  {
    path: "/weeks/:id",
    name: "WeekView",
    component: () => import("../views/WeekView.vue"),
  },
  {
    path: "/days/:id",
    name: "DayView",
    component: () => import("../views/DayView.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
