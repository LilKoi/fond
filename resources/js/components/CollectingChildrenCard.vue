<template>
  <v-card class="mx-4 d-flex flex-column align-center">
            <v-card-title>
              {{ name }}
            </v-card-title>
            <v-card-text class="d-flex flex-column align-center">
              <v-img :src="photo.name" />
              <div class="text-center">{{ description }}</div>
              <v-progress-linear v-if="saved" class="mt-4" color="light-blue" height="20" value="100" striped>{{ sum }} руб.</v-progress-linear>
              <v-progress-linear v-if="!saved" class="mt-4" color="pink" height="20" value="20" striped>{{ sum }} руб.</v-progress-linear>
            </v-card-text>
            <v-card-actions>
              <v-btn v-if="!saved" class="white--text" color="pink">
                Помочь ребенку
              </v-btn>
            </v-card-actions>
    </v-card>
</template>

<script>
export default {
  props: {
    name: String,
    description: String,
    sum: Number,
    saved: Boolean,
    photo: String
  }
}
</script>

<style>

</style>