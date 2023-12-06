<template>
    <div class="container-fluid">
        Pitch Page
        <div>
            Session Key: {{ AxiosToken }}
            
        </div>
    </div>
</template>

<script>
import userDetailMixin from '@/components/Datasource/userDetailMixin.js'
export default {
    name: "Pitch",
    mixins:[userDetailMixin],
    data() {
        return {
            AxiosToken:''
        };
    },
    mounted(){
           
           //called from UserDetailMixin
           console.log(this.loadUserDetails());
          
       }
};
</script>
