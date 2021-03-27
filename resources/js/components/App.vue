<template>
  <v-app>
    <v-main class="grey lighten-5">
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
import Navbar from './Navbar'
export default {
  name: 'App',
  components: {
    Navbar
  },

  data: () => ({
    //
  }),
};
</script>

<style>
  body {
    box-sizing: border-box;
  }
</style>
