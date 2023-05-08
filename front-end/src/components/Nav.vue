<script setup>
import { useAuthStore } from "../stores/auth";

const authStore = useAuthStore();
</script>
<template>
  <nav class="navbar position-sticky navbar-expand-lg bg-body-tertiary navbar-dark bg-dark ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link :to="{ name: 'Home' }" class="nav-link" aria-current="page">Home</router-link>
          </li>
          <template v-if="!authStore.user">
            <li class="nav-item">
              <router-link :to="{ name: 'Login' }" class="nav-link">Login</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'Register' }" class="nav-link">
                Registrati
              </router-link>
            </li>
          </template>
          <template v-else>
            <li class="nav-item d-flex align-items-center">
              <button @click="authStore.handleLogout" class="btn btn-dark">Logout</button>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'BlockListView' }" class="nav-link">
                BlockListView
              </router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'BlockView', params: { id: 1 } }" class="nav-link">
                BlockView 1 <!-- TODO eliminare rendere dinamico per il singolo blocco  -->
              </router-link>
            </li>
          </template>
        </ul>

      </div>
    </div>
  </nav>
</template>

<style scoped>
.nav-item>.btn-dark {
  color: rgba(255, 255, 255, 0.55);
}
</style>