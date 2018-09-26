import Vue from 'vue'
import App from './App'
import router from './router'
import AtComponents from 'at-ui'
import 'at-ui-style'
let VueCookie = require('vue-cookie')

Vue.use(AtComponents)
Vue.config.productionTip = false
Vue.use(VueCookie)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
