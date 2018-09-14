import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/pages/Home'
import Notes from '@/pages/Notes'
import Todo from '@/pages/Todo'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/notes',
      name: 'Notes',
      component: Notes
    },
    {
      path: '/todo',
      name: 'Todo',
      component: Todo
    }
  ]
})
