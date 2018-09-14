<template>
  <div class="notes-main" uk-grid>
    <div class="ns-sidebar uk-width-1-3">
       <ul class="uk-list uk-list-striped">
          <li>List item 1</li>
          <li>List item 2</li>
          <li>List item 3</li>
       </ul>
    </div>
    <div class="ns-content uk-width-2-3 uk-text-left">
        <ul uk-accordion>
            <li class="uk-open">
                <a class="uk-accordion-title" href="#">Пункт №1</a>
                <div class="uk-accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#">Пункт №2</a>
                <div class="uk-accordion-content">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#">Пункт №3</a>
                <div class="uk-accordion-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                </div>
            </li>
        </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Notes',
  data () {
    return {}
  }
}
</script>

<style>
</style>
