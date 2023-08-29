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
            background: black;
            color:white;
            padding: 2em;
            height: 100vh;
            width: 200px; /* Set the initial width for the aside */
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
        /*Nav Style*/
        /* Reset default list styles */
/* Reset default list styles */
/* Reset default list styles */



        @media (max-width: 767px) {
            aside {
                display: none;
                position:absolute;
                margin-top:3em;
            }
            main{
                width:100% !important;
            }
        }
    </style>
    <body>
               <aside>

               <nav>
                    <ul class="nav-links">
                        <li><i class="fas fa-home"></i> Home</li>
                        <li><i class="fas fa-file-alt"></i> Manage Document</li>
                        <li>
                            <i class="fas fa-users"></i> Investors<i class="fas fa-caret-down"></i>


                            <ul class="sub-links">
                                <li></i> Investor</li>
                                <li></i> Investor groups</li>
                            </ul>
                        </li>
                        <li>
                            <i class="fas fa-briefcase"></i> Deals<i class="fas fa-caret-down"></i>
                            <ul class="sub-links">
                                <li></i> All deals</li>
                                <li></i> Pipelines</li>
                                <li></i> Pipeline view</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-file-invoice"></i> Invoices</li>
                        <li>
                            <i class="fas fa-file-signature"></i> Proposals<i class="fas fa-caret-down"></i>
                            <ul class="sub-links">
                                <li></i> Proposal list</li>
                                <li></i> Templates</li>
                            </ul>
                        </li>
                        <li>
                            <i class="fas fa-tasks"></i> Activities<i class="fas fa-caret-down"></i>
                            <ul class="sub-links">
                                <li></i> Calendar View</li>
                                <li></i> Activity list</li>
                            </ul>
                        </li>
                        <li>
                            <i class="fas fa-money-bill"></i> Expenses<i class="fas fa-caret-down"></i>
                            <ul class="sub-links">
                                <li></i> Expenses</li>
                                <li></i> Area of Expenses</li>
                            </ul>
                        </li>
                        <li>
                            <i class="fas fa-chart-bar"></i> Report<i class="fas fa-caret-down"></i>
                            <ul class="sub-links">
                                <li></i> Deals</li>
                                <li></i> Proposal</li>
                                <li></i> Pipeline</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-users-cog"></i> Users & Roles</li>
                        <li><i class="fas fa-cog"></i> Settings</li>
                        <li><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                    </ul>
                </nav>
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

            //
            
        })
  </script>
</html>
