@include('include.headLink')
   
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
    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        };
   </script>

</html>
