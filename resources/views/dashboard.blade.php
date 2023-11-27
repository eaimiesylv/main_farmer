
    @include('include.headLink')
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
   

   
  </head>
    <style>
        *{
            margin:0;
            padding:0;
        }
       
        body {
            max-height: 100vh;
            display: flex; /* Use flexbox to arrange the elements */
         }

        aside {
            background: black;
            color:white;
            padding: 2em;
            height: 100vh;
            width: 250px; /* Set the initial width for the aside */
        }

        main {
           
            flex: 1; /* Allow main to take remaining width */
            overflow:scroll;
        }

         header{
           
            background:white;
            height:70px;
           
        }
        section{
            background: #F9F9F9;
            min-height:600px;
            
        }
        


        /* Move the last 3 list item to the righ */
        .header-list {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top:0.5em;
            padding-right:2em;
        }

        li {
        list-style: none;
        
        }
        header li{
            margin-left:3em;
        }
        .end-item {
        margin-left: auto;
        }
      
        @media (max-width: 767px) {
            aside {
                display: none;
                position:absolute;
                margin-top:3em;
                z-index:100;
            }
            main{
                width:100% !important;
            }
			.dropdown-menu-right{
			    margin-top:4em;
			}
           
        }
    
    </style>
    <body id="app" >
                
          <aside>
               
                 <side-nav/>

            </aside>
    
            <main>
                 <header>
                 {{ session('token') }}
                  
                    <input type="hidden" id="auth_user" value="{{ json_encode(Auth::user()) }}"/>
                    <input type="hidden" id="agricbusiness_detail" value="{{ json_encode(Auth::user()->agricbusiness_detail) }}"/>
                    <input type="hidden" id="investor_detail" value="{{ json_encode(Auth::user()->investor_detail) }}"/>
                   
                    
                      <header-nav />
    
                </header>
                <section>
                
                    
                    <router-view></router-view>


                 </section>
            
            </main>
        

    </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
       
       $(document).ready(function() {
          
            // Toggle aside on mobile bar click
            $("#mobile_bar").click(function() {
                $("aside").toggle();
            });

            //toggle sub menu
            $('.nav-links li').has('.sub-links').click(function() {
			    $(this).toggleClass('active').siblings().removeClass('active');
		    });
            //
            
            
        })
  </script>
     <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        };
   </script>
</html>
