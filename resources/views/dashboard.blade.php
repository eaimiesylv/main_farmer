<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Laravel Developer Test</title>
  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="toastr.css" rel="stylesheet"/>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	@vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
        background: red;
        padding: 2em;
        height: 100vh;
        width: 150px; /* Set the initial width for the aside */
    }

    main {
        background: #F9F9F9;
        flex: 1; /* Allow main to take remaining width */
    }

        section{
            background:black;
        }
        header{
           
            background:white;
            background:black;
        }
        section{
            background:white;
            width:95%;
            margin:0 auto;
        }
        main{background:#F9F9F9}


        /* Custom styles */


.header-list {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
}

.header-list li {
  list-style: none;
}
li{
    margin-left:1em
}
.end-item {
  margin-left: auto;
}


@media (max-width: 767px) {
        aside {
            display: none;
        }
    }
    </style>
    <body>
               <aside>

                    <ul>
                        <li> <i class="fas fa-sun"></i>Home</li>
                        <li> <i class="fas fa-sun"></i>About</li>
                        <li> <i class="fas fa-sun"></i>Contact</li>
                    </ul>
               </aside>
               <main>
                    <header>
                    <ul class="header-list">
                    <li><i class="fas fa-bars mobile" id="mobile_bar"></i></li>
                    <li class="end-item">
                         <i class="fas fa-sun"></i>
                    </li>
                    <li><i class="fas fa-search"></i></li>
                    <li><i class="fas fa-user mobile"></i></li>
                </ul>
                    </header>
                    <section id="app">sectin part of hw</section>
            
               </main>
    </body>
    <script>
        $(document).ready(function() {
          
            // Toggle aside on mobile bar click
            $("#mobile_bar").click(function() {
                $("aside").toggle();
            });
        })
  </script>
</html>
