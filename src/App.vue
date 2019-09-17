<template>
  <div id="app">
    <div id="nav">
      <navbar></navbar>
      <message messageall="messageall" type="alert-warning"></message>
    </div>
    <router-view />
  </div>
</template>

<script>
import Navbar from "./components/Navbar";
import Counter from "./components/Counter";
import Message from "./components/Message";
export default {
data() {
    return {
      msg: "script propos vuejs",
    
    };
  },
  components: {
    navbar: Navbar,
    message: Message,
  }
};
</script>