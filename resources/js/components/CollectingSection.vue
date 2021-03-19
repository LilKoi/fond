<template>
  <v-container class="mt-4">
      <v-layout row class="mt-12" justify-center>
        <v-flex xs12 md4 class="my-2" v-for="card in children" :key="card.id">
        <collecting-children-card :name="card.name" :sum="card.sum" :description="card.description" :photo="card.photo[0].name" />
        </v-flex>
      </v-layout>
    </v-container>
</template>

<script>
import CollectingChildrenCard from './CollectingChildrenCard.vue'
export default {
  components: { CollectingChildrenCard },
  data() {
      return {
        children: []
      }
    },
    methods: {
      async getChildren() {
        console.log('Get unsaved')
        let res = await fetch('http://127.0.0.1:8000/api/children')
        let json = await res.json()
        this.children = json["don't help"]
        console.log(this.children)
      }
    },
    mounted() {
      this.getChildren()
    }
}
</script>

<style>

</style>