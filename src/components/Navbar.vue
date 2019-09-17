<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <router-link class="navbar-brand" to="/">Vue Laravel API</router-link>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" v-if="!loggenIn">
          <router-link class="btn btn-primary my-1 btn-block" to="/login" >Login</router-link>
        </li>
        <li class="nav-item"  v-if="!loggenIn">
          <router-link
            class="btn btn-success my-1 ml-1 btn-block"
            to="/register"
            tabindex="-1"
            aria-disabled="true"
          >Register</router-link>
        </li>
         <li class="nav-item" v-if="loggenIn">
          <button
            class="btn btn-warning my-1 ml-2 mr-2  btn-block"
            @click="logout"
            tabindex="-1"
            aria-disabled="true"
          >Log out</button>
        </li>
      </ul>
    </div>
  </nav>
</template>
<script>
export default {

  name: "navbar",
   data() {
    return {
      token: null
    };
  },
  mounted()
  {
    this.checkUserStatus();
  },
  computed:
  {
    loggenIn()
    {
      return this.$store.getters.get_loggedIn;
    }
  },
  methods:{
    checkUserStatus()
    {
      if ( localStorage.getItem("token") != null ) {

        this.token = localStorage.getItem("token");        
      }
    },
    logout()
    {
      localStorage.removeItem("token");
      localStorage.removeItem("user");
      this.token= null
      this.$router.push("\login");
    }
  }
}
</script>
