<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Laravel Developer Test</title>
  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

   
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
    <body>
              
            <aside>
                <!-- These file contain the side navigation item -->
                 @include('include.sideNav')

            </aside>

            <main>
                <header>
                   <!-- These file contain the navigation navigation item -->
                     @include('include.headerNav')
                </header>
                 <section id="app">hhhhhhhhhhh</section>
            
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
