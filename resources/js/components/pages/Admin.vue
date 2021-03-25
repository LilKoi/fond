<template>
  <div>
    <admin-panel />
    <router-view />
  </div>
</template>

<script>
import AdminPanel from "../AdminPanel.vue";
export default {
  components: { AdminPanel }
};
</script>

<style>
.form {
  height: 100%;
}
</style>
