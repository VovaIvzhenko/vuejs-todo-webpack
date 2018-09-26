<template>
    <div class="home">
        <div class="container">
            <div class="row at-row">
                <div class="col-8">
                    <at-table :columns="columns1" :data="categories"></at-table>
                    <!--<ul>
                        <li v-for="(item, index) in categories" :key="index" @click="currentCat = item.id">
                            {{item.name}}
                        </li>
                    </ul>-->
                </div>
                <div class="col-16">
                    <at-collapse simple accordion :value="0">
                        <at-collapse-item v-for="(item, index) in currentNotes" :key="index" ref="title">
                            <div slot="title">
                                <div class="title-left">{{ item.title }}</div>
                                <div class="title-right" @click="deleteNotes($event)">
                                    <i class="icon icon-trash-2"></i>
                                </div>
                            </div>
                            <div>
                                {{ item.desc }}
                            </div>
                        </at-collapse-item>
                    </at-collapse>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Home',
  data () {
    return {
      search: '',
      categories: [],
      notes: [],
      currentCat: 5,
      columns1: [
        {
          title: 'Category',
          key: 'name'
        }
      ]
    }
  },
  computed: {
    currentNotes () {
      return this.notes[this.currentCat]
    }
  },
  methods: {
    getNotes () {
      axios('//api.ivzhen.com/notes/get').then((resp) => {
        if (!resp.data) return false
        this.categories = resp.data.categories
        this.notes = resp.data.notes
      })
    },
    deleteNotes (e) {
      this.$Message('1231')
      console.log(this.$refs.title)
      console.log('12')
    }
  },
  created () {
    this.getNotes()
  }
}
</script>

<style>
.title-left{
  display: inline-block;
}
.title-right{
  display: inline-block;
  float: right;
}
.title-right>i{
  color: coral;
}
</style>
