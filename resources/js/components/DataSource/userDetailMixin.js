// userDetailsMixin.js
export default {
    methods: {
      loadUserDetails() {
        const authUserInput = document.getElementById("auth_user");
        const authUserValue = authUserInput.value;
        this.profile = JSON.parse(authUserValue);
  
        const agricbusiness_detail = document.getElementById("agricbusiness_detail");
        const agricbusiness_value = JSON.parse(agricbusiness_detail.value);
  
        const investor_detail = document.getElementById("investor_detail");
        const investor_value = JSON.parse(investor_detail.value);
  
        if (!agricbusiness_value) {
          this.detail = "Investor ";
          this.user_details = this.all_details_fields['investor'];
          this.user_detail = investor_value;
        } else {
          this.detail = "Agribusiness";
          this.user_details = this.all_details_fields['agricbusiness'];
          this.user_detail = agricbusiness_value;
        }
  
        console.log(this.user_detail);
      },
    },
  };
  