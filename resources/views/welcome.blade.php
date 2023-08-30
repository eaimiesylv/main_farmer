<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Laravel Developer Test</title>
  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	@vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

   
  </head>
    <style>
        main{
            min-height:100vh;
        }
        aside{
            background:white;
        }
        section{
            
            background: url("../images/banner.png") no-repeat center center fixed;
            background-size: contain;


        }
    </style>
    <body>
        <main class="row">
            
               
                <section class="col-md-8 bg-primary text-white">
                   <!--empty space occupy by background image -->
                </section>
                <!-- Second Column - Width 5 Columns -->
                <aside class="col-md-4">
                  <div class="row">
                        <div class="col-md-9 offset-md-1 text-center" style="margin-top:5em">
                            <img src="images/log.png " height="75px"/>
                        </div>
                        <div class="col-md-8 offset-md-2 mt-3" id="app">
                           
                                <log-reg/>
                                
                        </div>
                       
                    </div>
                </aside>
            
        </main>
    </body>
</html>
