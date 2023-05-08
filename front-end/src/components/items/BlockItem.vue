<script setup>
import { onMounted } from "vue";
const props = defineProps({
    block: Object,
})
</script>
<template>
    <div class="col">
        <router-link :to="{ name: 'BlockView', params: { id: block.id } }" class="card text-decoration-none text-dark">
            <div class="card-body">
                <h4 class="card-title">ID:{{ block.block_name }}</h4>
                <h4 class="card-title">ID:{{ block.id }}</h4>
                <p class="card-text">Text</p>
            </div>
        </router-link>
    </div>
</template>
<style scoped></style>