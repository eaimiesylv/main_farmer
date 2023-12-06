<style scoped>

*{
    margin:0;
    padding:0;
}
.fas{
    color:orange;
    margin:0.5em;
}
.container-fluid{
    background: #F9F9F9;
    min-height:100vh;
    padding:2em;
    font-family: 'Roboto', sans-serif;
   
}
h4{
    margin-bottom:1em;
}
.tab-content,.nav{
    background:white;
    padding:2em;
}
/*spacing between the a element*/
.nav a{
    padding:1em;
}
/* create margin on nav div */
.col-md-9{
    padding-left:1em
}
/* create margin-top for all div element*/
.form-group{
  margin-top:1.5em;
  
}
@media (max-width: 767px) {
    .col-md-9{
        padding-left:0em
    }
    .container-fluid{
       
        height:100vh;
        padding:1em;
   
    }
           
} 
</style>
<template>
    <div class="container-fluid">

        <div class="row"  style="background:white;padding:2em;margin-bottom:1em">
                <div class="col-md-3 d-flex">
                    <img src ="images/profile.png" class="rounded-circle" height="100"/>
                    <h6 class="m-3"><i class="fas fa-envelope"></i>{{ profile.email}}</h6> 
            
                </div>
                <div class="col-md-3 text-left">
                       <h6 class="m-3"><i class="fas fa-user"></i>{{ profile.fullname }}</h6> 
                       <h6 class="m-3"><i class="fas fa-phone"></i>{{ profile.phone_number }}</h6> 

                </div>
                <div class="col-md-4 text-left">
                       <h6 class="m-3"><i class="fas fa-globe"></i>{{ profile.company_website }}</h6> 
                       <h6 class="m-3"><i class="fas fa-check-circle"></i> Registered: {{ profile.email_verified_at }}</h6> 

                </div>
        </div>

        <div class="row">
            <div class="nav flex-md-column flex-sm-row col-sm-12 col-md-3 mb-3" id="v-pills-tab" role="tablist" >
                <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>
                <a class="nav-link" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false">Password</a>
                <a class="nav-link" id="v-pills-detail-tab" data-toggle="pill" href="#v-pills-detail" role="tab" aria-controls="v-pills-detail" aria-selected="false">{{detail}}</a>
            </div>

             <div class="col-md-9">
                
             
                <div class="tab-content" id="v-pills-profile-tab">
                       
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <h4>Personal Data</h4>
                            <hr>
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
                        </div>
                        <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                            <h4>Password Info</h4>
                            <hr>
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
                            <h4>Other Details</h4>
                            <hr>
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
    </div>
</template>
<script>
import FormField from '@/components/FormField/FormFields.vue'
import {passwordFields} from '@/components/Datasource/PasswordField.js'
import {profileFields} from '@/components/Datasource/ProfileField.js'
import {allDetailsFields} from '@/components/Datasource/AllDetailField.js'
import userDetailMixin from '@/components/Datasource/userDetailMixin.js'
    export default{
       name:'Profile',
       mixins:[userDetailMixin],
       components:{
         FormField,

       },
        data(){
            return{
                 // profile, user_password, detail, user_details is coming from mixin file
                  profile:{}, //all user value
                  user_password:{},// password value
                  detail:'',//hold the title of tab which is either agric business or investor
                  user_detail:{},//hold either agric or investor value
                  user_details:{}, //hold all agric business and investor form field
                  password_fields:passwordFields,
                  profile_fields:profileFields,
                  all_details_fields:allDetailsFields 
              
            }
        },
        methods:{

        },
        mounted(){
           
            //called from UserDetailMixin
            this.loadUserDetails();
           
        }
       
    }
</script>