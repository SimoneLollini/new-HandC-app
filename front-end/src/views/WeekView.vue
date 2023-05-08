<script setup>
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth.js";
import { useRoute } from "vue-router";
import { getCalls as getCalls } from "../stores/getCalls.js";
import Nav from "../components/Nav.vue";
import DayItem from "../components/items/DayItem.vue";

const route = useRoute()
const authStore = useAuthStore();
onMounted(async () => {
    await authStore.getUser();
    getCallsgetWeek(getCalls.URL + '/weeks/' + route.params.id);
});
</script>
<template>
    <Nav />
    <div class="container">
        <h1>WeekView {{ this.$route.params.id }}</h1>
        <h2>Lista dei giorni:</h2>
        <div class="row" v-if="getCallsdays">
            <DayItem v-for="day in getCallsdays" :day="day" />
        </div>
        <div v-else>
            caricamento..
        </div>
    </div>
</template>
<style scoped></style>