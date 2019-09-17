<template>
  <div class="profile">
    <div class>
      <div class="col-md-6 offset-md-3">
        <h2 class="display-4 text-center mt-5">Profile Form</h2>

        {{ message }}
      </div>
    </div>
  </div>
</template>

<script>
export default {

methods:{
callMe(){
  alert('Call this function ')
},
mounted(){
  this.$root.$on('messageFromChild',(arg1,arg2) => {
    console.log('message');
  });
},
sendMessageToParent()
{
  this.$emit('messageFromChild',arg1,arg2);
}
},
props:{
  message: String
},
watch:{
  'message':function()
  {
    this.callMe();
  }
}
}
</script>

<style>

</style>
