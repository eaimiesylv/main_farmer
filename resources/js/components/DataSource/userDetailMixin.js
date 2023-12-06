// userDetailsMixin.js
import axios from 'axios';

export default {
    methods: {
      loadUserDetails() {
        const authUserInput = document.getElementById("auth_user");
        const authUserValue = authUserInput.value;
        this.profile = JSON.parse(authUserValue);
  
        const agricbusiness_detail = document.getElementById("agricbusiness_detail");
        const token = document.getElementById("token");
       
         this.Axiostoken = token.value;
  
        if (!agricbusiness_detail) {

          this.detail = "Investor ";
          const investor_detail = document.getElementById("investor_detail");
          const investor_value = JSON.parse(investor_detail.value);
          this.user_details = this.all_details_fields['investor'];
          this.user_detail = investor_value;


        } else {
          
          this.detail = "Agribusiness";
          const agricbusiness_value = JSON.parse(agricbusiness_detail.value);
          console.log(agricbusiness_value)
          this.user_details = this.all_details_fields['agricbusiness'];
          this.user_detail = agricbusiness_value;

        }
        const axiosConfig = {
          headers: {
            'Authorization': `Bearer ${token.value}`,
            'Content-Type': 'application/json', 
          },
        };
  
        console.log(this.user_detail);
      },
    },
  };
  