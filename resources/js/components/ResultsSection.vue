<template>
  <v-container>
      <v-layout row justify-end class="mt-12">
        
        <v-flex xs12 md12 class="mt-12 d-flex flex-column align-center">
          <h3 class="text-h4 text-md-h3 text-center">Наши результаты,
благодаря вашей поддержке</h3>
          <!-- <v-layout row class="mt-10"> -->
            <v-flex xs12 md6 class="d-flex flex-column align-center my-8">
              <v-img src="pig.png" max-width="140" />
              <span class="text-h5 text-md-h4 font-weight-bold">
                71 ребёнок
              </span>
              <span class="text-h5 text md-h4">
                прооперирован
              </span>
            </v-flex>
            <v-flex xs12 md6 class="d-flex flex-column align-center my-8">
              <v-img src="image_40.png" max-width="140" />
              <span class="text-h5 text-md-h4 font-weight-bold">
                3 ребенка
              </span>
              <span class="text-h5 text md-h4">
                прошли курс реабилитации
              </span>
            </v-flex>
            <v-flex xs12 md6 class="d-flex flex-column align-center my-8">
              <v-img src="toys.png" max-width="140" />
              <span class="text-h5 text-md-h4 font-weight-bold">
                12 101 015 руб.
              </span>
              <span class="text-h5 text md-h4">
                сумма пожертвований
              </span>
            </v-flex>
            
          <!-- </v-layout> -->
        </v-flex>
      </v-layout>
    </v-container>
</template>

<script>
// import ResultsItem from './ResultsItem.vue'
export default {
  // components: { ResultsItem },

}
</script>

<style>
</style>