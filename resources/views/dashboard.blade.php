
    @include('include.headLink')
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">

   
  </head>
    <style>
        *{
            margin:0;
            padding:0;
        }
       
        body {
        min-height: 100vh;
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
            background: #F9F9F9;
            flex: 1; /* Allow main to take remaining width */
        }

         header{
           
            background:white;
            height:70px;
           
        }
        section{
            background:white;
            width:95%;
            min-height:600px;
            margin:3em auto;
        }
        main{background:#F9F9F9}


        /* Move the last 3 list item to the righ */
        .header-list {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top:1.3em;
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
            }
            main{
                width:100% !important;
            }
			.dropdown-menu-right{
			margin-top:4em;
			}
        }
    </style>
    <body id="app">
           
            <aside>
                 <!-- These file contain the side navigation item--> 
                 <side-nav/>

            </aside>

            <main>
                <header> {{Auth::user()}}
                     <!-- These file contain the header navigation item-->
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
            
        })
  </script>
</html>
