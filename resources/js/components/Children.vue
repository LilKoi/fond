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
                  ><v-img :src="child.photo[0].name"
                /></v-list-item-avatar>
                <v-list-item-group>
                  <v-list-item-content>
                    <v-list-item-title class="title">{{
                      child.name
                    }}</v-list-item-title>
                    <v-list-item-subtitle>{{ child.sum }}</v-list-item-subtitle>
                    {{ child.description }}
                  </v-list-item-content>
                </v-list-item-group>
                <v-spacer />
              </v-list-item>
            </v-flex>
            <v-flex xs12 md4 class="d-flex justify-center">
              <v-btn color="yellow" rounded class="white--text mx-2"
                >Изменить</v-btn
              >
              <v-btn color="red" rounded class="white--text mx-2"
                >Закрыть</v-btn
              >
            </v-flex>
          </v-layout>
        </div>
      </v-list>

      <v-form>
        <v-text-field>Text</v-text-field>
      </v-form>
    </v-card>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      children: [
        {
          id: 50,
          name: "Zane Osinski DVM",
          description:
            "Quia quisquam nihil harum. Et quisquam atque ut aut nemo molestiae veniam omnis. Totam illum quos at sunt et.",
          sum: 3918072.3,
          created_at: "2021-03-16T15:58:02.000000Z",
          updated_at: "2021-03-16T15:58:02.000000Z",
          status: 1,
          photo: [
            {
              id: 1,
              name:
                "https://s23527.pcdn.co/wp-content/uploads/2019/10/Khanh-Phan-Viet-Nam-entry-Open-competition-Travel-2020-Sony-World-Photography-Awards.jpg.optimal.jpg",
              child_id: 51,
              created_at: "2021-03-16T15:59:16.000000Z",
              updated_at: "2021-03-16T15:59:16.000000Z"
            }
          ]
        },
        {
          id: 51,
          name: "ребёнок первый",
          description: "lofdssDs",
          sum: 20000,
          created_at: "2021-03-16T15:59:16.000000Z",
          updated_at: "2021-03-16T15:59:16.000000Z",
          status: 1,
          photo: [
            {
              id: 1,
              name:
                "https://s23527.pcdn.co/wp-content/uploads/2019/10/Khanh-Phan-Viet-Nam-entry-Open-competition-Travel-2020-Sony-World-Photography-Awards.jpg.optimal.jpg",
              child_id: 51,
              created_at: "2021-03-16T15:59:16.000000Z",
              updated_at: "2021-03-16T15:59:16.000000Z"
            },
            {
              id: 2,
              name: "C:/Users/Казбек/Documents/JS/fond/public/doctor.png",
              child_id: 51,
              created_at: "2021-03-16T15:59:16.000000Z",
              updated_at: "2021-03-16T15:59:16.000000Z"
            }
          ]
        }
      ]
    };
  },
  methods: {
    async getChildren() {
      console.log("Get children");
      let res = await fetch("http://127.0.0.1:8000/api/children");
      let json = await res.json();
      this.children.push(json.help);
      this.children.push(json["don't help"]);
    }
  },
  mounted() {
    // this.getChildren();
  }
};
</script>

<style></style>
