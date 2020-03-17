<template>
  <div class="contract-component">
    <h4 class="title">Contract</h4>
    <input type="text" class="signatures-input" disabled :value="formatSignatures">
  </div>
</template>

<script>
  export default {
    name: 'ContractComponent',
      props: {
          signatures: Array,
      },
      computed: {
        formatSignatures() {
            return this.signatures.map(role => role.key).join('');
        }
      }
  }
</script>
