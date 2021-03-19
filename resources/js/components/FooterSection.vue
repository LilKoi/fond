<template>
  <footer class="px-12 mt-12">
        <v-layout row justify-space-around align-content-center class="mt-12">
        <v-flex xs12 md4 class="hidden-sm-and-down">
          <v-img src="logo.png" max-width="120"></v-img>
        </v-flex>
        <v-flex xs12 md4 class="hidden-sm-and-down">
          <main-button />
        </v-flex>
        <v-flex xs12 md2 class="text-right">
          <span>8 (927) 120-33-75<br></span>
          <span>8 (985) 431-56-76<br></span>
          <span>info@fond-providenie.ru</span>
        </v-flex>
      </v-layout>
    </footer>
</template>

<script>
import MainButton from './MainButton'
export default {
  components: {
    MainButton
  }
}
</script>

<style>

</style>