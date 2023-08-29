<template>
  <div class="container-fluid p-0">
    <div class="row mt-3">
      <div class="col-md-12">
        
            <form @submit.prevent="submitData">
                <div class="form-group">
                  <label for="email"  class="col-sm-12 col-form-label">Email</label>
                  <input
                    type="email"
                    id="email"
                    v-model="login.email"
                    class="form-control"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="password"  class="col-sm-12 col-form-label">Password</label>
                  <input
                    type="password"
                    id="password"
                    v-model="login.password"
                    class="form-control"
                    required
                  />
                </div>
               <div class="form-group row">
               
                <div class="col-sm-12 mt-3">
                  <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
              </div>
            </form>
            <div class="mt-3">
              <router-link to="/register">Register</router-link> |
              <router-link to="#">Forgot Password</router-link>
            </div>
          
        
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: "Login",
 
  data() {
    return {
      login: {
        email: 'okomemmanuel1@gmail.com',
        password: 'abcd',
      },
      userRole: null,
    };
  },
  methods: {
    submitData() {
      
      toastr.success("This is a success message.", "Success");
      this.$router.push('/dashboard');
      // toastr.error("This is an error message.", "Error");
      // toastr.warning("This is a warning message.", "Warning");
      // toastr.info("This is an info message.", "Info");
      
    },
  },
  mounted() {},
};
</script>

<style scoped>
label{
 
  text-align:left;
}
</style>
