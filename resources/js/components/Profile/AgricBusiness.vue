<template>
    <div class="container-fluid">



        <div class="row">
            <div class="nav flex-column col-sm-12 col-md-1" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                 
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>
                    <a class="nav-link" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false">password</a>
                    <a class="nav-link" id="v-pills-{{}}-tab" data-toggle="pill" href="#v-pills-{{}}" role="tab" aria-controls="v-pills-{{}}" aria-selected="false">{{}}</a>
            </div>
            <div class="tab-content  col-sm-12 col-md-8" id="v-pills-tabContent">
                     {{ profile }}
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        
                        <form>
                            <template v-for="(field, index) in fields" :key="index">
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
                    <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">c</div>
                    <div class="tab-pane fade" id="v-pills-{{}}" role="tabpanel" aria-labelledby="v-pills-{{}}-tab">d</div>
            </div>
        </div>
    </div>
</template>
<style>



</style>
<script>
import FormField from '@/components/FormField/FormFields.vue'
    export default{
       name:'Profile',
       components:{
         FormField
       },
        data(){
            return{
                  profile:{},
                  agricbusiness_detail:"",
                  investor_detail:"",  
                  fields:[
                        {
                            name: "fullname",
                            label: "Fullname",
                            type: "text",
                            placeholder: "Fullname",
                            isRequired: true,
                        },
                        {
                            name: "email",
                            label: "Email",
                            type: "email",
                            placeholder: "Email",
                            isRequired: true,
                        },
                        /*{
                            name: "company_website",
                            label: "Company website",
                            type: "url",
                            placeholder: "Company website",
                            isRequired: true,
                        },*/
                        {
                            name: "phone_number",
                            label: "Phone Number",
                            type: "number",
                            placeholder: "Phone Number",
                            isRequired: true,
                        },
                        {
                            name: "contact_person",
                            label: "Contact Person",
                            type: "text",
                            placeholder: "Contact Person",
                            isRequired: true,
                        },
                        ]
            }
        },
        methods:{

        },
        mounted(){
            
            const authUserInput = document.getElementById("auth_user");
            const authUserValue = authUserInput.value;
            this.profile=JSON.parse(authUserValue);
            console.log(this.profile);
            console.log('Data Type of this.profile:', typeof this.profile);
            console.log("*********************************** end of profile session")

            console.log(authUserValue);
            console.log("***********************************")

            const agricbusiness_detail = document.getElementById("agricbusiness_detail");
            const agricbusiness_value = agricbusiness_detail.value;
            console.log(agricbusiness_value);

            console.log("***********************************")
            const investor_detail = document.getElementById("investor_detail");
            const investor_value = investor_detail.value;
            console.log(investor_value);
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