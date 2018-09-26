<template>
    <at-menu mode="horizontal" active-name="1">
        <at-menu-item name="1">
            <router-link to="/" class="uk-active"><i class="icon icon-home"></i>Home</router-link>
        </at-menu-item>
        <at-menu-item name="2">
            <router-link to="/notes" class="uk-active"><i class="icon icon-layers"></i>Notes</router-link>
        </at-menu-item>
        <at-menu-item name="4">
            <router-link to="/todo"><i class="icon icon-settings"></i>Todo</router-link>
        </at-menu-item>
    </at-menu>
</template>

<script>
export default {
  name: 'Header'
}
</script>
