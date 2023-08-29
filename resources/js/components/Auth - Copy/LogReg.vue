<template>
  <div class="container-fluid p-0">
          <div class="form-group">
                  <div class="col-12">
                    <p class="text-center">
                      <router-view></router-view>
                    </p>
                  </div>
          </div>
  </div>
</template>
<script>
export default {
  name: "LogReg",
  data() {
    return {
    }
  },
};
</script>