<script setup>
import { onMounted } from "vue";
const props = defineProps({
    exercise: Object,
})
</script>
<template>
    <div class="col">
        <div class="card text-decoration-none text-dark">
            <div class="card-body">
                <h4 class="card-title">ID:{{ exercise.name }}</h4>
                <h4 class="card-title">ID:{{ exercise.id }}</h4>
                <p class="card-text">Text</p>
            </div>
        </div>
    </div>
</template>
<style scoped></style>