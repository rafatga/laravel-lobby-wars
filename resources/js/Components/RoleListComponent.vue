<template>
  <div class="role-list-component">
    <h4 class="title">Roles</h4>
    <div class="grid-container">
      
      <div class="item1" v-for="role in roles">
        <button class="role-button" @click="onClickAddRoleSignature(role)">Add {{ role.name }}</button>
      </div>
      
    </div>
  </div>
</template>

<script>
    import RoleService from '../services/RoleService'
    
    export default {
        name: 'RoleListComponent',
        data () {
          return {
              roles: []
          }
        },
        created () {
            this.fetchRoles();
        },
        methods: {
            fetchRoles() {
                RoleService.query().then(response => {
                    this.roles = response.data.roles
                })
            },
            onClickAddRoleSignature(role) {
                this.$emit('onaddrolesignature', role)
            },
        }
    }
  
</script>
