<script setup>
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth.js";
import { useRoute } from "vue-router";
import { getCalls as getCalls } from "../stores/getCalls.js";
import Nav from "../components/Nav.vue";
import WeekItem from "../components/items/WeekItem.vue";

const route = useRoute()
const authStore = useAuthStore();
onMounted(async () => {
    await authStore.getUser();
    getCallsgetBlock(getCalls.URL + '/blocks/' + route.params.id);
});
</script>
<template>
    <Nav />
    <div class="container">
        <h1>Block {{ this.$route.params.id }}</h1>
        <h2>Lista delle settimane:</h2>
        <div class="row">
            <WeekItem v-for="week in getCallsweeks" :week="week" />
        </div>
    </div>
</template>
<style scoped></style>