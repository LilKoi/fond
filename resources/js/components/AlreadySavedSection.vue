<template>
  <v-container class="my-16">
      <div>
          <h3 class="text-h4 text-md-h3 text-center mt-12 mb-8">Детки, которым вы уже помогли</h3>
      
      <v-layout row wrap justify-center>
        <v-flex xs12 md4 class="mt-4" v-for="card in savedChildren" :key="card.id">
          <collecting-children-card :name="card.name" :sum="card.sum" :description="card.description" saved :photo="card.photo[0].name" />
        </v-flex>
      </v-layout>
      </div>
    </v-container>
</template>

<script>
import CollectingChildrenCard from './CollectingChildrenCard'

export default {
    components: {CollectingChildrenCard},
    data() {
      return {
        savedChildren: []
      }
    },
    methods: {
      async getSavedChildren() {
        console.log('Get saved')
        let res = await fetch('http://localhost:8000/api/children')
        let json = await res.json()
        this.savedChildren = json.help
        console.log(this.savedChildren)
        window.saved = this.savedChildren 
      }
    },
    mounted() {
      this.getSavedChildren()
    }
}
</script>

<style>

</style>