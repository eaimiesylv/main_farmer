<template>
    <div class="form-group col-12">
      <label>{{ label }}</label>
      <input
        :type="type"
        class="form-control"
        :value="value"
        :placeholder="placeholder"
        @input="$emit('input', $event.target.value)"
        :required="isRequired"
      />
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
  