<template>
  <div class="container-fluid p-0">
    <div class="row mt-3">
      <div class="col-md-12">
        <form method="POST" action="/login">
          <input type="hidden" name="_token" v-bind:value="csrfToken">
          <div class="form-group">
            <label for="email" class="col-sm-12 col-form-label">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              v-model="login.email"
              class="form-control"
              required
            />
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-12 col-form-label">Password</label>
            <input
              type="password"
              id="password"
              name="password"
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
     csrfToken: window.Laravel.csrfToken,
      login: {
        email: 'admin@gmail.com',
        password: '12345678',
      },
      userRole: null,
    };
  },
  methods: {
    submitData() {

     alert("ok");
    },
  },
};
</script>

<style scoped>
label {
  text-align: left;
}
</style>
