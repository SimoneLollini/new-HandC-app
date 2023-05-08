<script setup>
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth.js";
import { useRoute } from "vue-router";
import { getCalls as getCalls } from "../stores/getCalls.js";
import Nav from "../components/Nav.vue";
import BlockItem from "../components/items/BlockItem.vue";
const route = useRoute()
const authStore = useAuthStore();
onMounted(async () => {
    await authStore.getUser();
    getCallsgetBlocks(getCalls.URL + '/blocks');
});
</script>
<template>
    <Nav />
    <div class="container">
        <h1>Block List</h1>
        <div class="row gap-2 row-cols-6">
            <BlockItem v-for="block in getCallsblocks" :block="block" />
        </div>
    </div>
</template>
<style scoped></style>