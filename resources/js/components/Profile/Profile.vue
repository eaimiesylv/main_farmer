<template>
    <div class="container-fluid">



        <div class="row">
            <div class="nav flex-column col-sm-12 col-md-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                 
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>
                    <a class="nav-link" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false">Password</a>
                    <a class="nav-link" id="v-pills-detail-tab" data-toggle="pill" href="#v-pills-detail" role="tab" aria-controls="v-pills-detail" aria-selected="false">{{ detail }}</a>
                       
             </div>
            <div class="tab-content  col-sm-12 col-md-8" id="v-pills-profile-tab">
                    
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        
                        <form>
                            <template v-for="(field, index) in profile_fields" :key="index">
                                <form-field
                                    :label="field.label"
                                    :type="field.type"
                                    :value="profile[field.name]"
                                    :placeholder="field.placeholder"
                                    :isRequired="field.isRequired"
                                    @input="profile[field.name] = $event"
                                />
                            </template>
                        </form>
                        <!---<form>
                            <form-field
                                label="Fullname"
                                type="text"
                                :value="profile.fullname"
                                placeholder="Fullname"
                                :isRequired="true"
                                @input="profile.fullname = $event"
                            />
                           
                        </form>-->
                    
                         
                    </div>
                    <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                        <form>
                            <template v-for="(field, index) in password_fields" :key="index">
                                <form-field
                                    
                                    :label="field.label"
                                    :type="field.type"
                                    :value="user_password[field.name]"
                                    :placeholder="field.placeholder"
                                    :isRequired="field.isRequired"
                                    @input="user_password[field.new_name] = $event"
                                />
                            </template>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-detail" role="tabpanel" aria-labelledby="v-pills-detail-tab">
                        <form>
                            <template v-for="(field, index) in user_details" :key="index">
                                <form-field
                                    
                                    :label="field.label"
                                    :type="field.type"
                                    :value="user_detail[field.name]"
                                    :placeholder="field.placeholder"
                                    :isRequired="field.isRequired"
                                    @input="user_detail[field.new_password] = $event"
                                />
                            </template>
                        </form>

                    </div>
            </div>
        </div>
    </div>
</template>
<style scoped>


.container-fluid{
    background: #F9F9F9;
    height:100vh;
    padding:3em;
   
}

.nav, .tab-content{
    
    background:white;
    background: #F9F9F9;
    padding:2em;
   
}

.tab-content{
    margin-left:2em !important;
   
   
}
</style>
<script>
import FormField from '@/components/FormField/FormFields.vue'
import {passwordFields} from '@/components/Datasource/PasswordField.js'
import {profileFields} from '@/components/Datasource/ProfileField.js'
import {allDetails} from '@/components/Datasource/AllDetail.js'
    export default{
       name:'Profile',
       components:{
         FormField,
         //AgricBusiness,
         //InvestorDetail

       },
        data(){
            return{
                  profile:{},
                  user_password:{},
                  detail:'',
                  user_detail:{},
                  user_details:{},
                  password_fields:passwordFields,
                  profile_fields:profileFields,
                  all_details:allDetails
              
            }
        },
        methods:{

        },
        mounted(){
            //step 1 handles users profile information
            const authUserInput = document.getElementById("auth_user");
            const authUserValue = authUserInput.value;
            this.profile=JSON.parse(authUserValue);
            //step 2 handles agric business detail
            const agricbusiness_detail = document.getElementById("agricbusiness_detail");
            const agricbusiness_value = JSON.parse(agricbusiness_detail.value);
            //step 3handles investor detail
            const investor_detail = document.getElementById("investor_detail");
            const investor_value = JSON.parse(investor_detail.value);
            //renders  step 2 or 3
            if(!agricbusiness_value){
                this.detail= "Investor Detail"
                this.user_details=this.all_details['investor']
                this.user_detail=investor_value
            }else{
           
                this.detail="Agribusiness Detail"
                this.user_details=this.all_details['agricbusiness']
                this.user_detail=agricbusiness_value
            }
           
          
            console.log(this.user_detail)
           
        }
        /**
         * // Populate the field array
                this.fields = fields.map((field) => {
                return {
                    name: field.name,
                    label: field.label,
                    type: field.type,
                    placeholder: field.placeholder,
                    isRequired: field.isRequired,
                };
                });
         */
    }
</script>