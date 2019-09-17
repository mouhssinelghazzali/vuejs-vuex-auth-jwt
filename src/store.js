import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    token: null,
    loggedIn: false,
    user: null
  },
  mutations: {
    
    SET_LOGGEDIN(state,payload)
    {
      state.loggedIn = payload;
    },
    SET_TOKEN(state,payload)
    {
      state.token = payload;
    },
    SET_USER(state,payload)
    {
      state.user = payload;
    }

  },
  getters:{
      get_loggedIn(state)
      {
        return state.loggedIn;
      }
  },
  actions: {
    performLoginAction({commit},payload)
    {
     return new Promise((resolve,reject) => {

        axios
        .post("http://localhost:8000/api/auth/login", {
          email: payload.email,
          password: payload.password
        })
        .then(res => {
          commit('SET_TOKEN', res.data.access_token)
          commit('SET_USER', res.data.user)
          commit('SET_LOGGEDIN', true)

          resolve(res)
        //   console.log(res.data);
        //   store the token and user in localstorage
        //   const token = localStorage.setItem("token", res.data.access_token);
        //   const user = localStorage.setItem("user", res.data.user);
        //   this.$router.push("/profile");
        //   window.location ='/profile'
        })
        .catch(err => {
          // console.log(err.message);
          // this.error = err.message;

          reject(err)
        });
      })
    }
  }
});
