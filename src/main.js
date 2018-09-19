import Vue from 'vue'
import App from './App'
import router from './router'
import UIkit from 'uikit'
import Icons from 'uikit/dist/js/uikit-icons'
var VueCookie = require('vue-cookie')

Vue.config.productionTip = false
UIkit.use(Icons)
Vue.use(VueCookie)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
