<template>
  <div class="facts-section-wrapper">
    <v-container>
      <v-layout column justify-center>
        <v-flex xs12 md10 class="mt-12 d-flex flex-column justify-center">
        <h3 class="text-h4 text-md-h3 py-12 text-center">
          Три важных факта о ретинопатии недоношенных
        </h3>
      </v-flex>
      </v-layout>
    
      <v-layout row justify-end>
        <v-flex xs12 md3 lg3>
          <div class="tn-atom mx-4">
            <span class="font-weight-bold">
            Есть только 72 часа
          </span> 
для спасения зрения малыша после диагноза
          </div>
      </v-flex>
      <v-flex xs12 md3 lg3>
        <div class="tn-atom mx-4">
          <span class="font-weight-bold">
          Не покрывается ОМС
        </span>
         Одна операция стоит 160 000 - 300 000 руб.
        </div>
      </v-flex>
      <v-flex xs12 md3 lg3>
        <div class="tn-atom mx-4">
          <span class="font-weight-bold">
          Для многих родителей - это огромные деньги
        </span>
        , поэтому им нужна финансовая поддержка
        </div>
      </v-flex>
      </v-layout>
    </v-container>
    <card-section />
  </div>
</template>

<script>
import CardSection from './CardSection.vue'
export default {
  components: { CardSection },

}
</script>

<style scoped>
.facts-section-wrapper {
  position: relative;
  z-index: 1;
}
.facts-section-wrapper::before {
  content: " ";
  position: absolute;
  background: url("/doctor.png");
  opacity: .9;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: -1;
  background-size: 40%;
  background-position: 0% 30%;
  background-repeat: no-repeat;
  opacity: .9;
}


</style>