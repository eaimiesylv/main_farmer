<template>
    <ul class="header-list">
                    <li><i class="fas fa-bars mobile" id="mobile_bar"></i></li>
                    <li class="end-item">
                         <i class="fas fa-sun"></i>
                    </li>
                    <li><i class="fas fa-bell"></i></li>
                    <!-- no arrow class in the css code is use to hide the arrow-->
					 <li class="dropdown">
						<a class="dropdown-toggle no-arrow" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
							<i class="fas fa-user"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
							<router-link to="/profile" class="dropdown-item"> <i class="fas fa-user"></i> Profile </router-link>
							<a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a>
							<a class="dropdown-item" href="#"><i class="fas fa-bell"></i> Notifications</a>
							<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>

							<form id="logout-form" action="/logout" method="POST" style="display: none;">
								<input type="text" name="_token" v-bind:value="csrfToken">
							</form>
						</div>
					</li>
        </ul>
</template>
<script>
export default {
	name: "HeaderNav",
	data() {
	  return {
	   csrfToken: window.Laravel.csrfToken,
	  }
	},
  };
  </script>