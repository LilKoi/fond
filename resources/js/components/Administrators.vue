<template>
  <v-container>
    <v-card elevation="0">
      <h1 class="px-4">Администраторы:</h1>

      <v-dialog v-model="dialog" width="500">
        <template v-slot:activator="{ on, attrs }">
          <v-layout row justify-end>
            <v-btn
              color="pink"
              class="white--text mx-4 mt-4"
              dark
              elevation="0"
              v-bind="attrs"
              v-on="on"
            >
              Добавить администратора
            </v-btn>
          </v-layout>
        </template>

        <v-card>
          <v-card-title class="headline grey lighten-2">
            Добавить администратора
          </v-card-title>

          <v-card-text>
            <v-form>
              <v-text-field label="Логин" />
              <v-text-field label="Пароль" type="password" />
              <v-text-field label="Повторите пароль" type="password" />
            </v-form>
          </v-card-text>

          <v-divider />

          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="pink" class="white--text">
              Добавить
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </v-card>
  </v-container>
</template>

<script>
export default {};
</script>

<style></style>
