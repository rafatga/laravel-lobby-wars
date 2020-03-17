<template>
  <div class="container">
    <trial-component @onnewtrialcreated="onNewTrialCreated"></trial-component>
    <trial-history-component :trials="trials"></trial-history-component>
  </div>
</template>

<script>
    import TrialService from '../services/TrialService'
    import TrialComponent from './TrialComponent.vue'
    import TrialHistoryComponent from './TrialHistoryComponent.vue'
    
    export default {
        name: 'LobbyWarsComponent',
        components: {
            TrialComponent,
            TrialHistoryComponent
        },
        data () {
          return {
              trials: [],
          }
        },
        created () {
            this.fetchTrial()
        },
        methods: {
            fetchTrial () {
                TrialService.get()
                    .then((response) => {
                        this.trials = response.data.trials
                    })
                    .catch((errorResponse) => {
                        alert(errorResponse)
                    });
            },
            onNewTrialCreated () {
                this.fetchTrial()
            },
        }
    }
</script>
