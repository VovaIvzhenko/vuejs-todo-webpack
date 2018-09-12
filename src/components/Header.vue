<template>
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <router-link to="/" class="uk-active">Home</router-link>
                </li>
                <li>
                    <router-link to="/hello">Hello page</router-link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
  name: 'Header'
}
</script>
