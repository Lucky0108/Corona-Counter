<!DOCTYPE html>
<html lang="en">
    <head>
    <title>COVID-19 TRACKER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=B612+Mono:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@1,300&display=swap" rel="stylesheet">
    
     </head>
     <body >
   
     <!-- //////////////////////////////////// NAVIGATION BAR ///////////////////////////////////////// -->
     <nav class="navbar navbar-expand-lg nav_colour p-3">
     <!-- <nav class="navbar navbar-dark navbar-expand-md bg-dark p-3"> -->
            <a class="navbar-brand pl-5" href="#">COVID-19 TRACKER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                  </a>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#aboutid">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#previd">Prevention</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#liveid">Live Update</a>
                </li>
                
               
              </ul>
              <script>
                  function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                      x.className += " responsive";
                    } else {
                      x.className = "topnav";
                    }
                  }
                  </script>

            </div>
          </nav>
                <!-- //////////////////////////////////// HEADER /////////////////////////////////////////-->
          <div class="main_header">
            <div class="row w-100 h-100">
               <div class="col-lg-5 col-md-5 col-12 order-lg-1 ">
                  <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center" >
                        <img src="images/IMAGE1.jpeg" width="500" height="300">
                        </div>
                       </div>
                  <div class="col-lg-7 col-md-7 col-12 order-lg-1  ">
                    <div class="rightside w-100 h-100 pl-3 d-flex justify-content-center align-items-center ">
                        <h1>Stay Home And Stay Safe.
                          
                            
                        </h1>
                </div>
              </div>
              </div>
          </div>


          <!-- ***************************************** CORONA UPDATES **************************************-->
          <section class="corona_updates">
           <div class="conatiner-fluid sub_section pt-5 pb-5 " id ="aboutid">
             <div class="section_header text-center mb-5 mt-4">
               <h1 class="text-capitalize">About corona virus</h1>
               <hr class="w-25">
             </div>
           </div>
           <!-- <div class="row pt-5">
             <div class="col-lg-5 col-md-6 col-12 ">
               <img src="images/IMAGE3.png" class="img-fluid">
             </div>
             -->
             <div >
               <h2 class="text-center"> Brief About COVID-19</h2>
               <h3 class="text-center"> (Details According To WHO)</h2>
               <p class="pt-4">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>

               <p> Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
                
               <p> The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.</p> 
                
               <p> The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
                
               <p> At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
             </div>
           </div>
          </section>
          
          <!-- ***************************************** SYMPTOMS **************************************-->
          <div class="container-fluid pt-5 pb-5" id="sympid">
            <div class="section_header text-center mb-5 mt-4">
              <h1 class="text-capitalize">Coronavirus Symptoms</h1>
              <hr class="w-25">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <figure class="text-center">
                    <img src="images/IMAGE6.JPG" class="img-fluid" width="120" height="120">
                    <figcaption>Dry Cough</figcaption>
                  </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <figure class="text-center">
                    <img src="images/IMAGE4.JPG" class="img-fluid" width="120" height="120">
                    <figcaption>FEVER</figcaption>
                  </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <figure class="text-center">
                    <img src="images/IMAGE5.JPG" class="img-fluid" width="120" height="120">
                    <figcaption>Sore throat/Shortness Of Breath</figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>

           <!-- ***************************************** PREVENTION **************************************-->
           <div class="container-fluid sub_section pt-5 pb-5" id="previd">
            <div class="section_header text-center mb-5 mt-4">
              <h1 class="text-capitalize">Coronavirus Preventions</h1>
              <hr class="w-25">
              
            </div>

            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/IMAGE8.JPG" class="img-fluid" width="110" height="110">
                </div>
                <div class="col-lg8 col-md-8 col-12">
                  <p>Wash your hands frequesntly with water and lots of soap for atleast 20 seconds.</p>
                </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                      
                    <img src="images/IMAGE9.JPG" class="img-fluid" width="100" height="100">
                    </div>               
                <div class="col-lg8 col-md-8 col-12">
                  <p>Cover your face with your elbow when sneezing. Don't cover it with your hand.</p>
                </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/IMAGE10.JPG" class="img-fluid" width="100" height="100">
                </div>
                <div class="col-lg8 col-md-8 col-12">
                  <p>Virus can stay on your hand because they touch so many places. So Don't touch your face eyes or nose with hands.</p>
                </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mt-5">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/IMAGE11.JPG" class="img-fluid" width="100" height="100">
                </div>
                <div class="col-lg8 col-md-8 col-12">
                  <p>If you feel any symptom Contact a doctor immediately.</p>
                </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
          <section class="clor corona_updates container-fluid">
            <div class="my-5">
              <h3 class=" text-center text-uppercase pt-4 " > Corona Virus Live Updates Of India </h3>
                <hr class="w-25">
          <div class="table-responsive pt-5" id="liveid" >
            <table class="table table-bordered table-stripped text-center" >
              <thead>
                <tr>
                  <th class="text-capitalize">Last Updated Time</th>
                  <th class="text-capitalize">State</th>
                  <th class="text-capitalize">Confirmed </th>
                  <th class="text-capitalize">Active</th>
                  <th class="text-capitalize">Recovered</th>
                  <th class="text-capitalize">Deaths</th>
                </tr>
              </thead>
              <?php
               $data=file_get_contents('https://api.covid19india.org/data.json');
                $coronaupdate=json_decode($data,true);

                // echo "<pre>";
                // print_r($coronaupdate);
                // echo "</pre>";

                $statescount = count($coronaupdate['statewise']);

                $i=1;
                while($i < $statescount){

                  ?>
                  <tr>
                    <td><?php  echo $coronaupdate['statewise'][$i]['lastupdatedtime'] ?></td>
                    <td><?php  echo $coronaupdate['statewise'][$i]['state'] ?></td>
                    <td><?php  echo $coronaupdate['statewise'][$i]['confirmed'] ?></td>
                    <td><?php  echo $coronaupdate['statewise'][$i]['recovered'] ?></td>
                    <td><?php  echo $coronaupdate['statewise'][$i]['active'] ?></td>
                    <td><?php  echo $coronaupdate['statewise'][$i]['deaths'] ?></td>
                    <!-- echo $coronaupdate['statewise'][$i]['lastupdatedtime'] ."<br>";
                    echo $coronaupdate['statewise'][$i][''] ."<br>";
                    echo $coronaupdate['statewise'][$i][''] ."<br>";
                    echo $coronaupdate['statewise'][$i][''] ."<br>";
                    echo $coronaupdate['statewise'][$i][''] ."<br>";
                    echo $coronaupdate['statewise'][$i][''] ."<br>"; -->

                    <?php

                              $i++;
                }

                ?>
                  
            </table>

      <!-- ***************************************** FOOTER **************************************-->
      <footer class="mt-5">
        <div class="footer_style text-white text-center container">
          <p>Made With ❤ By Lakshay Yadav </p>
        </div>
      </footer>

      <!-- ####################### Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
  </div>
  <!-- <script>
    
    function fetch(){
    
    $.get("https://corona-virus-world-and-india-data.p.rapidapi.com/api",
    
    function (data){
        console.log(data['state_wise'].length)
    }
 )
}
  </script> -->
  



  <script src="js/main.js"></script>
  
     </body> 
</html>
