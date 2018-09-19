<template>
  <div id="app">
    <nav-bar/>
    <router-view/>
  </div>
</template>

<script>
import Header from './components/Header'
export default {
  name: 'App',
  components: {
    'nav-bar': Header
  },
  created () {}
}
</script>

<style lang="scss">
  $global-link-color: #DA7D02;
  @import "~uikit/src/scss/variables-theme.scss";
  @import "~uikit/src/scss/mixins-theme.scss";
  @mixin hook-card() {
    color: #000;
  }
  @import "~uikit/src/scss/uikit-theme.scss";
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
  }
</style>
