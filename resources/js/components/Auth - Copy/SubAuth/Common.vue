<template>
  <div class="container-fluid p-0">
    <div class="row mt-3">
      <div class="col-md-12">
        
                <div class="form-group row">
                  <label for="company_website" class="col-sm-12 col-form-label">Your Company Website</label>
                  <div class="col-sm-12">
                    <input
                      type="url"
                      id="company_website"
                      v-model="fields.company_website"
                      class="form-control"
                      
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="contact_person" class="col-sm-12 col-form-label">Contact Person</label>
                  <div class="col-sm-12">
                    <input
                      type="text"
                      id="contact_person"
                      v-model="fields.contact_person"
                      class="form-control"
                      required
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fullname" class="col-sm-12 col-form-label">Full Name</label>
                  <div class="col-sm-12">
                    <input
                      type="text"
                      id="fullname"
                      v-model="fields.fullname"
                      class="form-control"
                      required
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-12 col-form-label">Email</label>
                  <div class="col-sm-12">
                    <input
                      type="email"
                      id="email"
                      v-model="fields.email"
                      class="form-control"
                      required
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-12 col-form-label">Password</label>
                  <div class="col-sm-12">
                    <input
                      type="password"
                      id="password"
                      min=6
                      v-model="fields.password"
                      class="form-control"
                      required
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="phone_number" class="col-sm-12 col-form-label">Phone Number</label>
                  <div class="col-sm-12">
                    <input
                      type="tel"
                      id="phone_number"
                      v-model="fields.phone_number"
                      class="form-control"
                      required
                    />
                  </div>
                </div>
               <div class="form-group row">
                <div class="col-sm-12"></div>
                
              </div>
          
          
        
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Common",
  data() {
    return {
      fields: {
        company_website: '', // 1. Your Company Website
        contact_person: '', // 2. Contact Person
        fullname: '', // 3. Full Name
        email: '',
        password: '',
        phone_number: ''
      },
      userRole: null,
    };
  },
  methods: {
    submitData() {
      // Handle registration logic here
    },
  },
  mounted() {},
};
</script>

<style scoped>

/* Add any custom styling for your registration form here */
</style>
