<template>
  <v-container>
    <v-card elevation="0">
      <h1 class="px-4">Дети:</h1>
      <v-list>
        <div
          class="child--item px-4 my-4"
          v-for="child in children"
          :key="child.id"
        >
          <v-layout row justify-space-between align-center>
            <v-flex xs10 md8>
              <v-list-item>
                <v-list-item-avatar size="70"
                  ><v-img :src="null"
                /></v-list-item-avatar>
                <v-list-item-group>
                  <v-list-item-content>
                    <v-list-item-title class="title"
                      >{{ child[0].name }}
                      <v-chip>{{ child[0].status }}</v-chip>
                    </v-list-item-title>
                    <v-list-item-subtitle
                      >{{
                        child[0].payment_sum_price
                          ? child[0].payment_sum_price
                          : 0
                      }}/{{ child[0].sum }}
                      <v-icon color="green"
                        >monetization_on</v-icon
                      ></v-list-item-subtitle
                    >
                    {{ child[0].description }}
                  </v-list-item-content>
                </v-list-item-group>
                <v-spacer />
              </v-list-item>
            </v-flex>
            <v-flex xs12 md4 class="d-flex justify-center">
              <v-btn color="gray" rounded elevation="2">Изменить</v-btn>
              <v-btn color="red" rounded class="white--text mx-2" elevation="2"
                >Закрыть</v-btn
              >
            </v-flex>
          </v-layout>
        </div>
      </v-list>
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
              Добавить ребенка
            </v-btn>
          </v-layout>
        </template>

        <v-card>
          <v-card-title class="headline grey lighten-2">
            Добавить ребенка
          </v-card-title>

          <v-card-text>
            <v-form>
              <v-text-field label="ФИО ребенка" />
              <v-text-field label="ФИО родителя" />
              <v-select
                label="Статус ребенка"
                :items="['Нужна помощь', 'Помощь оказана', 'В ожидании']"
              />
              <v-autocomplete
                item-text="city"
                :items="cities"
                hide-no-data
                color="pink"
                label="Место проживания"
              />
              <v-text-field label="Необходимая сумма" type="number" />
              <v-text-field label="Собранная сумма" type="number" />

              <v-textarea label="Описание" />
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
export default {
  data() {
    return {
      children: [],
      dialog: false,
      cities: null
    };
  },
  methods: {
    async getChildren() {
      console.log("Get children");
      let res = await fetch("http://127.0.0.1:8000/api/children?status=1,2");
      let json = await res.json();
      this.children.push(json["HELP"]);
      this.children.push(json["DONT_HELP"]);
      console.log(this.children);
      window.children = this.children;
    },
    async getCities() {
      const res = await fetch("/api/city");
      const json = await res.json();
      this.cities = json;
      window.cities = json;
    }
  },
  mounted() {
    this.getChildren();
    this.getCities();
  }
};
</script>

<style></style>
