<script setup>
import { onMounted } from "vue";
import { useAuthStore } from "../stores/auth.js";
import { useRoute } from "vue-router";
import { getCalls as getCalls } from "../stores/getCalls.js";
import Nav from "../components/Nav.vue";
import ExerciseItem from "../components/items/ExerciseItem.vue";

const route = useRoute()
const authStore = useAuthStore();
onMounted(async () => {
    await authStore.getUser();
    getCallsgetDay(getCalls.URL + '/days/' + route.params.id)
});
</script>
<template>
    <Nav />
    <div class="container">
        <h1>DayView {{ this.$route.params.id }}</h1>
        <h2>Lista degli esercizi: </h2>
        <div class="row" v-if="getCallsexercises">
            <ExerciseItem v-for="exercise in getCallsexercises" :exercise="exercise" />
        </div>
        <div v-else>
            caricamento...
        </div>
    </div>
</template>
<style scoped></style>