<template>
    <div>
        <div class="alert " :class="type" role="alert">
        {{messageall}}
        </div>
    </div>
</template>

<script>
export default {

    props: {
  type: {
    type: String,
    default: 'alert-dark'
  },
  messageall: String,

},
    data() {
    return {
    //  messageall: "Hello, world!"
    };
  }

}
</script>

<style>

</style>
