<script setup>
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth.js";
import { useRoute } from "vue-router";
import { calls as calls } from "../stores/calls.js";
import Nav from "../components/Nav.vue";
const route = useRoute()
const authStore = useAuthStore();
onMounted(async () => {
    await authStore.getUser();
    calls.getBlocks(calls.URL + '/blocks');
});
</script>
<template>
    <Nav />
    <section class="text-dark ">
        <h1>Block List</h1>
    </section>
</template>
<style scoped></style>