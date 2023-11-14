<template>
    <div class="container-fluid">

        

        <div class="row">
            
             
             <div class="col-sm-12">
                
             
              
                            <form>
                                <template v-for="(field, index) in dealFields" :key="index">
                                    <form-field
                                        :label="field.label"
                                        :type="field.type"
                                        :value="deal_detail[field.name]"
                                        :placeholder="field.placeholder"
                                        :isRequired="field.isRequired"
                                        @input="deal_detail[field.name] = $event"
                                    />
                                </template>
                            </form>
                            
                        
                            
                       
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


</style>
<script>
import FormField from '@/components/FormField/FormFields.vue'
import {dealFields} from '@/components/Datasource/DealField.js'

    export default{
       name:'AddPitch',
       components:{
         FormField,
       },
        data(){
            return{
                  deal_detail:{},
                  dealFields:dealFields, 
            }
        },
        methods:{

        },
        mounted(){
            console.log('ok')
        }
    }
</script>