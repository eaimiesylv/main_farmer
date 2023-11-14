<template>
    <div class="row" style="margin:2em">
     
      <div class = "col-md-3">
        <label>{{ label }}</label>
      </div>
      <div class = "col-md-9">
        <input
          :type="type"
          class="form-control custom-input"
          :value="value"
          :placeholder="placeholder"
          @input="$emit('input', $event.target.value)"
          :required="isRequired"
          
        />
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      label: String,
      type: String,
      value: [String, Number],
      placeholder: String,
      isRequired: Boolean
    }
  };
  </script>
<style scoped>
.custom-input {
  
  background-color:#E9ECEF;
  padding:0.7em;
}
</style>