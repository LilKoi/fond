<template>
  <v-main>
    <v-navigation-drawer app permanent expand-on-hover>
      <v-list>
        <v-list-item class="px-2 py-4">
          <v-list-item-avatar>
            <v-icon large>settings</v-icon>
          </v-list-item-avatar>
          <v-list-item-title class="title">{USERNAME}</v-list-item-title>
        </v-list-item>
        <v-divider />
        <v-list-item-group color="pink">
          <v-list-item to="/children" link dense class="px-2 py-2">
            <v-list-item-avatar>
              <v-icon large>child_care</v-icon>
            </v-list-item-avatar>
            <v-list-item-content>Дети</v-list-item-content>
          </v-list-item>
          <v-divider />
          <v-list-item to="/administration" link dense class="px-2 py-2">
            <v-list-item-avatar>
              <v-icon large>supervisor_account</v-icon>
            </v-list-item-avatar>
            <v-list-item-content>Администраторы</v-list-item-content>
          </v-list-item>
          <v-divider />
          <v-list-item to="/donuts" link dense class="px-2 py-2">
            <v-list-item-avatar>
              <v-icon large>monetization_on</v-icon>
            </v-list-item-avatar>
            <v-list-item-content>Донаты</v-list-item-content>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
  </v-main>
</template>

<script>
export default {};
</script>

<style></style>
