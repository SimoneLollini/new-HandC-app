<script setup>
import { onMounted } from "vue";
const props = defineProps({
    week: Object,
})
</script>
<template>
    <div class="col">
        <router-link :to="{ name: 'WeekView', params: { id: week.id } }" class="card text-decoration-none text-dark">
            <div class="card-body">
                <h4 class="card-title">Nome: {{ week.week_name }}</h4>
                <h4 class="card-title">ID:{{ week.id }}</h4>
                <p class="card-text">Text</p>
            </div>
        </router-link>
    </div>
</template>
<style scoped></style>