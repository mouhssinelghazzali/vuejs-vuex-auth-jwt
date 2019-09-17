<template>
  <div>
    <section class="section pb-0 bg-gradient-info main-section">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-lg-2 ml-lg-auto">
            <div class="position-relative pl-md-5">
              <img src="https://calamari.pl/user/pages/08.attendance-tracking/clock-in.svg" class="img-center img-fluid" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 mt-0">
            <div class="card bg-gradient-secondary shadow shadow-lg--hover mt-5">
              <form class="card-body p-lg-5" >
                <h4 class="mb-1"></h4>
                <p class="mt-0">To access some of the coolest & awesome projects.</p>
                <div class="form-group mt-5">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="ni ni-user-run"></i>
                      </span>
                    </div>
                    <input
                      class="form-control"
                      placeholder="Your Email address"
                      name="email"
                      type="email"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="ni ni-email-83"></i>
                      </span>
                    </div>
                    <input
                      class="form-control"
                      placeholder="Your Password"
                      name="password"
                      type="password"
                    />
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-success btn-round btn-block btn-lg">Login</button>
                  <p class="text-center my-2">OR</p>
                  <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                      <a class="google-img-wrapper">
                        <img
                          src="https://www.chriscartland.com/static/io2013/images/sign-in-button.png"
                          class="google-signin-img img-fluid"
                        />
                      </a>
                    </div>
                    <div class="col-md-6">
                      <router-link to="/register" class="register-link">
                        <span class="nav-link-inner--text">New Registeration?</span>
                      </router-link>
                    </div>
                    <!-- <div v-if="store.state.loggedIn">
                      <h1>how data</h1>

                    </div> -->
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</template>



<script>
import VueRouter from "vue-router";
import firebase from "firebase";
// import store from "../store";


export default {
  name: "Login",
  data: function() {
    return {
      title: "LOGIN",
      userDetails: {
        email: null,
        password: null
      }
    };
  }
   
    
  
};
</script>

<style scoped>
section.main-section {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.section {
  padding-top: 0;
}
.google-img-wrapper {
  cursor: pointer;
}
.google-signin-img {
  width: 175px;
}
</style>


