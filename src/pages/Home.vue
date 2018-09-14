<template>
    <div class="home">
        Home
    </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Home',
  data () {
    return {}
  },
  methods: {
    test () {
      axios('//api.ivzhen.com/notes/get?id=123').then((resp) => {
        console.log(resp)
      })
    }
  },
  created () {
    this.test()
  }
}
</script>
