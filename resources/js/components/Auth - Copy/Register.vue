<template>
  <div class="container-fluid p-0">
    <div class="row mt-3">
      <div class="col-md-12">
        
          <form @submit.prevent="submitData">
        
           <div v-if="currentPage === 1">
            <div class="form-group row">
              <label class="col-sm-12 col-form-label">Register as</label>
              <div class="col-sm-12">
                <select class="form-control" v-model="userRole" >
                  <option v-for="role in userTypeList" :key="role.id" :value="role.id">{{ role.value }}</option>
                </select>
              </div>
          </div>

            <!-- Render components or content for page 1-->
            <Common ref="commonComponent" /> 

          </div>
           <div v-else-if="currentPage === 2">
            <!-- Render components or content for page 2 -->
                <component :is="dynamicComponentName" ref="dynamicComponent"></component>
          </div>
              <!-- Previous and Sign Up -->
              <div class="form-row">
                <div class="col-6">
                  <button class="bluish-text btn btn-warning btn-block text-center" @click="prevPage" v-if="currentPage > 1 && currentPage < 3">Previous</button>
                </div>
                <div class="col-6 text-right">
                  <button  class="btn btn-success btn-block text-center" v-if="currentPage != 1">
                    <span class="w-100">
                      <h4 v-if="loading"></h4>
                    </span>
                    <template v-if="!loading">Sign up</template>
                  </button>
                </div>
              </div>
              <!-- end Previous and sign up--->
              <!-- Show Login and Next Page--->
              <div class="form-row">
                <div class="col-6">
                  <router-link to="/">
                    <button class="bluish-text btn btn-primary btn-block text-center"   v-if="currentPage === 1">Login</button>
                  </router-link>
                </div>
                <div class="col-6 text-right ">
                  <button class="bluish-text btn btn-success btn-block text-center"
                    @click="nextPage"
                    v-if="currentPage === 1 && userRole !== null && userRole !== 0"
                    :disabled="userRole === null || userRole === 0"
                  >
                    Next
                  </button>
                
                </div>
              </div>
            <!-- end login and Next Page--->
            </form>
          
        
      </div>
    </div>
  </div>
</template>

<script>
import Common from "./SubAuth/Common.vue";
import Investor from "./SubAuth/Investor.vue";
import AgricBusiness from "./SubAuth/AgricBusiness.vue";
import axios from 'axios';
export default {
  name: "Register",
  components: {
    Common,
    Investor,
    AgricBusiness
  },
  data() {
    return {
      currentPage: 1, 
      userTypeList: [
        { id: 3, value: "Agric Business", email: "agent@demo.com", password: 123456 },
        { id: 2, value: "Investor", email: "client@demo.com", password: 123456 },
      ],
      userRole:'',
      commonField:'',
      loading:null
    };
  },
  computed: {
    dynamicComponentName() {
      if (this.userRole == 3) {
        return "AgricBusiness";
      } else if (this.userRole == 2) {
        return "Investor";
      }
      return null;
    },
  },
  methods: {
    nextPage() {
    if (this.currentPage < 3) {
      if (this.validateCommonFields()) {
          this.currentPage++; // Increment to the next page
        } else {
          toastr.error('All fields are required');
        }
    }
  },
  prevPage() {
    if (this.currentPage > 1) {
      this.currentPage--; // Decrement to the previous page
    }
  },
  validateCommonFields() {
      // Access the Common component using the reference
      this.commonField = this.$refs.commonComponent;

      // Check if all required fields are filled in the Common component
      const requiredFieldsFilled =
        this.commonField.fields.phone_number &&
        this.commonField.fields.email &&
        this.commonField.fields.password &&
        this.commonField.fields.contact_person &&
        this.userRole &&
        this.commonField.fields.fullname
        // Add other required fields here

      return requiredFieldsFilled;
    },
    async submitData(){

       try{
          const dynamicComponentData = { ...this.$refs.dynamicComponent.fields };
          const commonComponentData = { ...this.commonField.fields };

          // Construct the data payload
          const payload = {
            userRole: this.userRole,
            dynamicComponentData,
            commonComponentData
          };
         
        const response = await axios.post('/api/user', payload);
        if (response.data.message) {
        // Success handling
          toastr.success(response.data.message);
          this.$router.push('/');
           console.log('Registration successful:', response.data.message);
        // Redirect or show a success message to the user
      } 

       }
       catch(error){
          if (error.response) {
            toastr.error('An error occur');
            // The request was made and the server responded with an error status code
            console.error('Response data:', error.response.data.error);
   
          } 
       }
    }

        
  },
  mounted() {},
   watch: {
    userRole: {
      immediate: true, // This ensures the watch function is called on component mount
      handler(newRole, oldRole) {
        if (newRole !== oldRole) {
          // User role changed, update nextPageFields
         // this.nextPageFields = this.getNextPageFields();
          console.log('watching well')
        }
      }
    }
     }
  
};
</script>

<style scoped>
  .custom-checkbox {
  display: inline-block;
  opacity: 0; /* Set initial opacity for the checkbox */
} 
</style>
