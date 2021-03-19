<template>
  <v-container>
      <v-layout class="mt-8" row justify-center>
        <v-card elevation="4" class="d-flex flex-column justify-center flex-grow-0">
          <v-card-text class="pa-8 pb-6 d-flex flex-column justify-center">
            <span class="text-h5 text-md-h3 font-weight-light black--text text-no-wrap text-center">Ваша посильная помощь - <br> еще одна успешная операция</span>
            <span class="text-h5 text-md-h3 font-weight-light pink--text text-no-wrap text-center">Давайте вместе сохраним<br> малышам зрение!</span>
        </v-card-text>
          <div class="help-btn d-flex justify-center mb-n4">
            <main-button />
          </div>
        </v-card>
      </v-layout>
    </v-container>
</template>

<script>
import MainButton from './MainButton.vue'
export default {
  components: { MainButton },

}
</script>

<style>

</style>