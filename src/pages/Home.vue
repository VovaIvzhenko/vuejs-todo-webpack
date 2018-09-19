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
    let arr = ['test1', 'test2', 'test3']
    delete arr[1]
    this.$cookie.set('arr', JSON.stringify(arr))
    console.log(JSON.parse(this.$cookie.get('arr')))
  }
}
</script>
