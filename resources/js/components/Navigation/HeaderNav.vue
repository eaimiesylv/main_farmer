<template>
    <ul class="header-list">
                    <li><i class="fas fa-bars mobile" id="mobile_bar"></i></li>
                    <li class="end-item">
                         <i class="fas fa-sun"></i>
                    </li>
                    <li><i class="fas fa-bell"></i></li>
					<li><span> {{ name}}<br><small>{{ detail }}</small> </span></li>
                    <!-- no arrow class in the css code is use to hide the arrow-->
					 <li class="dropdown">
						
						<a class="dropdown-toggle no-arrow" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
							
							<img src="/images/profile.png" alt="Profile Image" height="30" class="rounded-circle"/>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
							<router-link to="/profile" class="dropdown-item"> <i class="fas fa-user"></i> <span>Profile </span></router-link>
							<a class="dropdown-item" href="#"><i class="fas fa-cog"></i><span>Settings</span></a>
							<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<i class="fas fa-sign-out-alt"></i><span> Logout</span>
							</a>

							<form id="logout-form" action="/logout" method="POST" style="display: none;">
								<input type="text" name="_token" v-bind:value="csrfToken">
							</form>
						</div>
					</li>
        </ul>
</template>
<script>
import userDetailMixin from '@/components/Datasource/userDetailMixin.js'
import {allDetailsFields} from '@/components/Datasource/AllDetailField.js'
export default {
	name: "HeaderNav",
	mixins:[userDetailMixin],
	data() {
	  return {
	  	 csrfToken: window.Laravel.csrfToken,
		 name:'',
	   	 profile:{},
         detail:'',
         user_detail:{},
         user_details:{},
		 all_details_fields:allDetailsFields 
	  }
	},
	methods: {
    truncatedName(names) {
		
		    let dName = names['fullname']
			if(!dName){
				this.name='';
				return
			}
			//const words = dName.split(' ');
			if(dName.length < 8){
				this.name= dName;
			}else{
				const truncatedWords = dName.slice(0, 8);
				this.name=`${truncatedWords} ...`;
				console.log(this.name)
			}
			
		}
    },
	mounted(){

		    this.loadUserDetails();
			this.truncatedName(this.profile)
	}
  };
  </script>
  <style scoped>

small{
	margin-top:-3em
}
li:nth-child(4){
	margin-right:-3em;
}
span{
	padding:1em;
}
</style>