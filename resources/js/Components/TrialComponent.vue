<template>
  <div class="trial-component grid-container">
    <div class="grid-item">
      
      <!-- start team-component -->
      <div class="team-component">
        <h4 class="title">{{ team1Name }}</h4>
        <role-list-component @onaddrolesignature="onAddSignature('team1',$event)"></role-list-component>
        <contract-component :signatures="team1Signatures"></contract-component>
        <div class="team-points-component">
          {{ team1Name }} has {{ getTeam1Points }} points
        </div>
      </div>
      <!-- end team-component -->
      
    </div>
    <div class="grid-item">
      <div class="start-trial-component">
        <button class="generic-button submit-trial" @click="submitTrial()" v-if="isTrialNew">
          Trial time!
        </button>
  
        <button class="generic-button new-trial" @click="newTrial()" v-if="isTrialSubmitted">
          New Trial!
        </button>
      </div>
    </div>
    <div class="grid-item">
  
      <!-- start team-component -->
      <div class="team-component">
        <h4 class="title">{{ team2Name }}</h4>
        <role-list-component @onaddrolesignature="onAddSignature('team2',$event)"></role-list-component>
        <contract-component :signatures="team2Signatures"></contract-component>
        <div class="team-points-component">
          {{ team2Name }} has {{ getTeam2Points }} points
        </div>
      </div>
      <!-- end team-component -->
      
    </div>
  </div>
</template>

<script>

    import TrialService from '../services/TrialService'
    import RoleListComponent from './RoleListComponent.vue'
    import ContractComponent from './ContractComponent.vue'
  
    export default {
        name: 'TrialComponent',
        components: {
            RoleListComponent,
            ContractComponent
        },
        data () {
          return {
              state: null,
              team1Name: null,
              team2Name: null,
              team1Signatures: null,
              team2Signatures: null,
          }
        },
        computed: {
            isTrialNew() {
                return this.state === "new"
            },
            isTrialSubmitted() {
                return this.state === "submitted"
            },
            getTeam1Points() {
                let hasKingSignature = this.team1Signatures.some( (role) => role.key === "K" )
                return this.team1Signatures.reduce( (acc, role) => {
                    let point = ( role.key === "V" && hasKingSignature === true)? 0 : role.points
                    return acc + point;
                }, 0 )
            },
            getTeam2Points() {
                let hasKingSignature = this.team2Signatures.some( (role) => role.key === "K" )
                return this.team2Signatures.reduce( (acc, role) => {
                    let point = ( role.key === "V" && hasKingSignature === true)? 0 : role.points
                    return acc + point;
                }, 0 )
            }
        },
        created () {
            this.newTrial()
        },
        methods: {
            newTrial() {
                this.state = "new"
                this.team1Name = "Team A"
                this.team2Name = "Team B"
                this.team1Signatures = []
                this.team2Signatures = []
            },
            submitTrial() {
                
                if ( !this.isSubmittedTrialCompleted() ) {
                    alert('At least 1 contract required per party!')
                    return false
                }
               
                let teams = []
                teams.push({
                    'name': this.team1Name,
                    'contracts': this.team1Signatures.map(role => role.key).join('')
                });
                teams.push({
                    'name': this.team2Name,
                    'contracts': this.team2Signatures.map(role => role.key).join('')
                })
                
                TrialService.create(teams)
                    .then((response) => {
                        this.state = "submitted"
                        this.$emit('onnewtrialcreated')
                    })
                    .catch((errorResponse) => {
                        alert(errorResponse)
                    });
              
              
            },
            isSubmittedTrialCompleted() {
                return this.team1Signatures.length > 0 && this.team2Signatures.length > 0
            },
            onAddSignature(team,role) {
                switch (team) {
                    case 'team1':
                        this.team1Signatures.push(role)
                    break;
                    
                    case 'team2':
                        this.team2Signatures.push(role)
                    break;
                }
            }
        }
    }
</script>
