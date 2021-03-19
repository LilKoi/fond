<template>
  <v-tooltip bottom>
        <template v-slot:activator="{ on, attrs }">
          <v-btn v-bind="attrs" v-on="on" class="mt-6 white--text" large color="pink">
          Помочь детям сейчас
        </v-btn>
      </template>
        <span>Каждый ваш взнос дает шанс <br> еще одному ребенку видеть!</span>
      </v-tooltip>
</template>

<script>
export default {

}
</script>

<style>

</style>