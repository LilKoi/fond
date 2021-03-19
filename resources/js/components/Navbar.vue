<template>
  <div>
      <v-app-bar height="90" app>
        <v-img class="mx-4 hidden-sm-and-down" max-width="90" src="logo.png" />

      <!-- <v-app-bar-title shrink-on-scroll> -->
          <span class="font-weight-regular text-uppercase text-h6">
              Фонд Провидение
            </span>
      <!-- </v-app-bar-title> -->
      <v-spacer></v-spacer>
        <v-container class="my-auto">
            <div class="nav-links hidden-sm-and-down">
            <div class="d-flex justify-center flex-wrap align-with-title">
                <router-link exact active-class="active-link" class="mx-1" to="/">
                    <v-btn small text color="pink">О Фонде</v-btn>
                </router-link>
                <router-link exact active-class="active-link" class="mx-1" to="/children">
                    <v-btn small text color="pink">Дети</v-btn>
                </router-link>
                <router-link exact active-class="active-link" class="mx-1" to="/safe">
                    <v-btn small text color="pink">Кому помогли</v-btn>
                </router-link>
                <router-link exact active-class="active-link" class="mx-1" to="/safepplp">
                    <v-btn small text color="pink">Тому помогли</v-btn>
                </router-link>
            </div>
        </div>
        </v-container>

        <div class="phone-number mx-5 hidden-sm-and-down">
            <span class="font-weight-bold text-no-wrap">
                8 (927) 120-33-75
            </span>
        </div>

        <v-dialog>  
            <template v-slot:activator="{ on, attrs }">
        <v-btn v-bind="attrs" v-on="on" class="white--text" color="pink" @click="showBanner = !showBanner">
                <v-icon left>phone</v-icon>
                <span>Перезвони нам</span>
            </v-btn>
      </template>

    <v-card  width="100%" height="100%">
          <v-card-title>Оставьте заявку</v-card-title>
          <v-card-subtitle>И мы позвоним Вам в ближайшее время</v-card-subtitle>
          <v-card-text>
            <v-form>
                <v-text-field label="Ваше имя:" />
                <v-text-field required class="black--text" label="Ваш номер телефона:" />
                <v-btn class="white--text" color="pink" >Позвоните мне!</v-btn>
            </v-form> 

          </v-card-text>
      </v-card>
      
    </v-dialog>


  </v-app-bar>
  </div>
</template>

<script>
export default {
    data() {
        return {
            showBanner: false
        }
    }
}
</script>

<style>
    ul {
        list-style: none;
    }
    a {
        text-decoration: none;
        color: black;
    }
    .active-link {
        border-bottom: 2px solid #e91e63;;
    }
</style>