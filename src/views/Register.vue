<template>
  <div class="register">
    <div class>
      <div class="col-md-6 offset-md-3">
        <h2 class="display-4 text-center mt-5">Register Form</h2>

        <form action="#">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="Name" id="Name" v-model="name" class="form-control" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" v-model="email" class="form-control" />
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              v-model="password"
              class="form-control"
            />
          </div>

          <div class="form-group">
            <button
              type="submit"
              class="btn btn-info btn-block"
              @click.prevent="performRegister"
            >Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import firebase from 'firebase'

export default {
  name: "register",
  data() {
    return {
      name: "",
      email: "",
      password: ""
    };
  },
  methods: {
    performRegister() {
      //console.log("perform register");
      //
      axios.post('http://localhost:8000/api/auth/register',{
        name: this.name,
        email: this.email,
        password: this.password
      })
      .then( res => {
          const token = localStorage.setItem("token", res.data.access_token);
          const user = localStorage.setItem("user", res.data.user);
          this.$router.push("/profile");
      })
      .catch( err => {
        console.log(err.message)
      })
    },
    logUser(user) {
    var ref = firebase.database().ref("users");
    var obj = {
        "user": user,
    };
    ref.push("/profile"); // or however you wish to update the node
},
    performRegister2()
    {
     firebase.auth().createUserWithEmailAndPassword(this.email, this.password).then(function(user) {
    var user = firebase.auth().currentUser;
    alert('created')
}, function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    alert(errorMessage)

    
});
    }
     

  }
};
</script>

<style>
</style>