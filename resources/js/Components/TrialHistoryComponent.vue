<template>
  <div class="trial-list-component">
    <ul>
      <li v-for="trial in trials"> {{ trial.title }} </li>
    </ul>
  </div>
</template>

<script>
  export default {
    name: 'TrialHistoryComponent',
    props: {
      trials: {
          type: Array,
          required: true
      }
    },
  }
</script>
