<template>
  <div class="main">
    <Navbar />
    <main-section />
    <facts-section />
    <!-- <card-section /> -->
    <support-section />
    <collecting-section />
    <results-section />
    <already-saved-section />
    <expansion-section />
    <footer-section />
  </div>
</template>

<script>
// import CardSection from '../CardSection.vue'
import Navbar from '../Navbar'
import CollectingSection from '../CollectingSection.vue'
import FactsSection from '../FactsSection.vue'
import MainSection from '../MainSection.vue'
import ResultsSection from '../ResultsSection.vue'
import SupportSection from '../SupportSection.vue'
import AlreadySavedSection from '../AlreadySavedSection.vue'
import ExpansionSection from '../ExpansionSection.vue'
import FooterSection from '../FooterSection.vue'
export default {
  components: {
    MainSection,
    FactsSection,
    // CardSection,
    SupportSection,
    CollectingSection,
    ResultsSection,
    AlreadySavedSection,
    ExpansionSection,
    FooterSection,
    Navbar
  }
}
</script>

<style>
</style>