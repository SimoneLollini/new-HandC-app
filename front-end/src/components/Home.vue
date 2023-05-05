<script setup>
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth";
import { store } from "../stores/store.js";
import Nav from "./Nav.vue";

const authStore = useAuthStore();
onMounted(async () => {
  await authStore.getUser();
});
</script>
<template>
  <Nav />
  <section class="text-dark ">
    <h1>Home</h1>
  </section>
</template>
<style scoped></style>