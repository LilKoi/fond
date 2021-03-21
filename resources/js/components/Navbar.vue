<template>
  <div>
      <v-app-bar height="90" app>
        <v-img max-width="90" src="logo.png" />

          <span class="font-weight-regular text-uppercase text-h6 mx-4 hidden-sm-and-down">
              Фонд Провидение
            </span>
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

        <v-dialog class="dialog">  
            <template v-slot:activator="{ on, attrs }">
        <v-btn v-bind="attrs" v-on="on" class="white--text" color="pink" @click="showBanner = !showBanner">
                <v-icon left>phone</v-icon>
                <span>Перезвони нам</span>
            </v-btn>
      </template>

    <v-card  width="100%" height="100%">
          <v-container>
              <v-row>
                      <v-card-title>Оставьте заявку</v-card-title>
              </v-row>
              <v-row class="mt-n6">
                    <v-card-subtitle>И мы позвоним Вам в ближайшее время</v-card-subtitle>
              </v-row>
          </v-container>
          <v-card-text>
            <v-form>
                <v-container>
                    <v-row>
                        <v-col>
                            <v-text-field color="pink" requred label="ФИО ребёнка" />
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-text-field color="pink" required class="black--text" label="ФИО представителя" />
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-text-field color="pink" required class="black--text" label="Номер телефона" />
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-text-field color="pink" required class="black--text" label="Диагноз" />
                        </v-col>
                    </v-row>
                    <v-row >
                        <v-col cols="5" sm="4" md="2" xl="2">
                            <v-text-field color="pink" required class="black--text" label="Возраст" />
                        </v-col>
                        <v-col sm="8" md="10">
                            <v-autocomplete hide-no-data color="pink" label="Место проживания" />
                        </v-col>
                    </v-row>
                        
                        <v-checkbox color="pink" label="Гражданство РФ" />
                        <v-textarea color="pink" label="Ваша история" />
                        <v-btn class="white--text" color="pink" >Позвоните мне!</v-btn>
                </v-container>
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

    .v-card {
        border-radius: 2px 0px 0px 2px !important;
    }

    .v-dialog::-webkit-scrollbar {
        width: 5px;
        background: #fff;
    }
    .v-dialog::-webkit-scrollbar-thumb {
        background: #e91e63;
    }
    .v-dialog::-moz-appearance-scrollbar {
        width: 5px;
        background: #fff;
    }
    .v-dialog::-moz-appearance-scrollbar-thumb {
        background: #e91e63;
    }

</style>