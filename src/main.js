import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import Vuex from "vuex";
import firebase from "firebase";

Vue.config.productionTip = false;

var firebaseConfig = {
  apiKey: "AIzaSyBinsAYUZrAXZNUNzoPSLPluLQRHYXhxT8",
  authDomain: "veujs-251914.firebaseapp.com",
  databaseURL: "https://veujs-251914.firebaseio.com",
  projectId: "veujs-251914",
  storageBucket: "",
  messagingSenderId: "827461175084",
  appId: "1:827461175084:web:7fb3f6cf4ef8a8846c4e89"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
new Vue({
  router,
  store,
  Vuex,
  render: h => h(App)
}).$mount("#app");
