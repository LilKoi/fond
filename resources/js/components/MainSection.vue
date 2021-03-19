<template>
  <div class="main-section-wrapper">
    <v-container class="my-16 main-container">
      <v-layout row class="my-5 main-section-bg">
        
        <v-flex xs12 md8>
          <h1 class="text-h4 text-md-h3 text-md-h2 font-weight-regular">
        Спасаем малышей!
      </h1>
      <h2 class="text-h5 text-md-h4 text-md-h3 mt-1 text-italic pink--text">
        Поддержите маленьких и беззащитных!
      </h2>
      <h3 class="text-h7 mt-2 font-weight-light">
        Каждый восьмой ребенок рождается раньше срока
По статистике, зрение 20% недоношенных детишек поражает ретинопатия
      </h3>

      <main-button />

      
        </v-flex>
      </v-layout>
      
    </v-container>
    </div> 
</template>

<script>
import MainButton from './MainButton.vue'
export default {
  components: { MainButton },

}
</script>

<style>
 .main-section-wrapper {
   position: relative;
   z-index: 1;
 }
 
 
  .main-section-wrapper::before {
  content: " ";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 110%;
  background: url("/main_bg.png");
  background-repeat: no-repeat;
  background-size: 40%;
  background-position: 100% 30%;
  z-index: -1;
  opacity: .9;
}

.main-container {
  /* position: relative; */
}

.main_bg {
  /* position: absolute; */
  /* width: 100%; */
}

</style>