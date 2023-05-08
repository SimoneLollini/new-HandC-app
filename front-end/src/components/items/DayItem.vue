<script setup>
import { onMounted } from "vue";
const props = defineProps({
    day: Object,
})
</script>
<template>
    <div class="col">
        <router-link :to="{ name: 'DayView', params: { id: day.id } }" class="card text-decoration-none text-dark">
            <div class="card-body">
                <h4 class="card-title">{{ day.day_name }}</h4>
                <h4 class="card-title">ID:{{ day.id }}</h4>
                <p class="card-text">Text</p>
            </div>
        </router-link>
    </div>
</template>
<style scoped></style>