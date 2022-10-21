

<html lang="en">

<head>

<meta charset = "utf-8">
<meta http_equiv = "X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>


<?php

include "config.php";
?>

  


<link rel="alternate"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/style2.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />






<style>

</style>










</head>


<body>


<!--header-- STARTS HERE -->
<!--==================================================================================================================================-->


<center><img src="pictures/62635418-vector-abstract-science-logo-template-.jpg" alt=""></center>

<section class="header">

<a href="index.php" class="logo"> Science for Life<br></a>

<nav class="nvaBar">


<a href="home.php" >home</a>
<a href="events.php" >Events </a>
<a href="ComingEventAdmin.php" >Up coming event</a>
<a href="discussion.php" >Discussion </a>
<a href="about.php" >About us </a>



</nav>


<div id="menu-btn" class="fas fa-bars"><img width="40%" src="pictures/sdjsjohsc.jpg" alt=""></div>



</section>










<!--header-- ENDS HERE -->
<!--==================================================================================================================================-->











<!--==================================================================================================================================-->
<!-- home section STARTS HERE  -->
<!--==================================================================================================================================-->



<section class="home">

    <div class="swiper home-slider">


        <div class="swiper-wrapper">


         



          
                       <div class="swiper-slide slide" style="background:url( 


        
<?php

$querySelect = " SELECT poster_image FROM events  ;";
$query_run = mysqli_query($conn, $querySelect);


if(mysqli_num_rows($query_run)>0){

    foreach( $query_run as $row ){


       ?>

           <?php  echo $row['poster_image'] ;?>"> 
  

       <?php

    }


}
else{


    ?>

         <tr>
            <td>No record to display </td>
         </tr>
    <?php
      }

      ?>

        


                             <div  class="content">

                                 
                                   <a href="package.php" class="btn">discover more </a>

                            </div>
                      </div>



                    


            </div>


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


        </div>

</section>











<!--==================================================================================================================================-->
<!-- home section ENDS HERE  -->
<!--==================================================================================================================================-->

















<!--==================================================================================================================================-->
<!-- services STARTS HERE //////////////////// -->
<!--==================================================================================================================================-->

<div class="service">



<section>
<h1 class ="headeing-title">up coming event </h1>

  <div class="box-container">

        <div class="box">

              <img width ="50%"src="pictures/Artificial-Intelligence-Project-Ideas-Topics-for-Beginners.png" alt="">
                <h3> AI  </h3>
        </div>


  </div>

  </section>
</div>

<!--==================================================================================================================================-->
<!-- services ENDS HERE  ///////////////////-->
<!--==================================================================================================================================-->

<div class = "container mt-5">

            <div class="row">

                    <div class="col-md-12">

                            <div class="card">

                            <h1>UP COMING EVENTS STAY TUNED</h1>


                            <center>

                                <div class="card-header" style = "width:90%;">



                                <?php

                               

                                  $querySelect = "select* from stuff order by id ASC ;";
                                  $query_run = mysqli_query($conn, $querySelect);

                                ?>
                                
                                  

                                            <table class="table">


                                         
                                          
                                            <tr class="table_header" >
                                                
                                                <th> Event</th>
                                                <th> Topic </th>
                                                <th> More about the Event </th>
                                                <th > Author </th>
                                                
                                            </tr>

                                        
                                            <?php

                                                        $querySelect = "select* from  upComingevents order by id ASC ;";
                                                        $query_run = mysqli_query($conn, $querySelect);

                                                        if(mysqli_num_rows($query_run) >0){

                                                            foreach( $query_run as $row ){


                                                               ?>

                                                      

                                                                        <tr>
                                                                         <td  style = " background-color:#f6f6f6; font-size : 18px; padding:1%;">   </td>
                                                            </tr>
   


                                                                <tr style = "padding:50%;"class="table_headerInSql">
                                                                   

                                                               
                                                                    <td style> <?php  echo $row[ 'event_name'] ?> </td>
                                                                    <td> <?php  echo $row['topics'] ?> </td>
                                                                    <td> <?php  echo $row['more_about_the_event'] ?> </td>
                                                                    <td> <img  alt="no image1"style = "  width: 30%;  border-radius:10%; margin-left:35%;"  src="<?php  echo $row['authorPicture'] ;?>"> </td> <br>
                                                         

                                                                 </tr>
                                                                 <tr>
                                                                         <td  style = " background-color:#f6f6f6; font-size : 18px; padding:3%;">   </td>
                                                            </tr>

                                                          
                                                               <?php

                                                            }


                                                        }
                                                        else{


                                                            ?>
 
                                                                 <tr>
                                                                    <td>No record to display </td>
                                                                 </tr>
                                                            <?php

                                                                

                                                        }

                                            ?>
                                            <tr>
                                                

                                            </tr>


                                            </table>

                                          
                                


                                </div>

                                </center>

                            </div>
                    </div>

            </div>





<!--==================================================================================================================================-->
<!-- ABOUT US  STARTS HERE  ///////////////////-->
<!--==================================================================================================================================-->




<br><br><br><br>





<br><br>
<div  class="content">

<h3>Who are we ?</h3>

<p> For many years I have been teaching about prophecy, under the title "Prophet Jim
Smith's prophecy school." These Conferences have been for all Pastors and leaders
who have an interest in prophecy.For many years I have been teaching about prophecy, under the title "Prophet Jim
Smith's prophecy school." These Conferences have been for all Pastors and leaders
who have an interest in prophecy.For many years I have been teaching about prophecy, under the title "Prophet Jim
Smith's prophecy school." These Conferences have been for all Pastors and leaders
who have an interest in prophecy.For many years I have been teaching about prophecy, under the title "Prophet Jim
Smith's prophecy school." These Conferences have been for all Pastors and leaders
who have an interest in prophecy.For many years I have been teaching about prophecy, under the title "Prophet Jim
Smith's prophecy school." These Conferences have been for all Pastors and leaders
who have an interest in prophecy.</p>

<br><br>
<a href="about.php" class ="btn">read more</a>
</div>

</div>



</section>








<!--==================================================================================================================================-->
<!-- ABOUT US  ENDS HERE  ///////////////////-->
<!--==================================================================================================================================-->



















<!--FOOTER-- START-->
<!--==================================================================================================================================-->



<section  class="footer">

<div class="box-container">

        <div class="box">

        <h3>Quick links </h3>

        <a href="index.php" > <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php" > <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php" > <i class="fas fa-angle-right"></i> Package</a>
        <a href="book.php" > <i class="fas fa-angle-right"></i> Book</a>

        
        </div>



        <div class="box">

        <h3>Extra links </h3>

        <a href="index.php" > <i class="fas fa-angle-right"></i> Ask question</a>
        <a href="about.php" > <i class="fas fa-angle-right"></i> About us</a>
         <a href="package.php" > <i class="fas fa-angle-right"></i> Privacy policies</a>
        <a href="book.php" > <i class="fas fa-angle-right"></i> Terms of use </a>

        
        </div>




        <div class="box">

        <h3>Contact info</h3>

        <a href="#" > <i class="fas fa-phone"></i> +264-81-64-86-416</a>
        <a href="#" > <i class="fas fa-phone"></i> +264-85-34-06-853</a>
        <a href="#" > <i class="fas fa-envelope"></i> dankibwika820@gmail.com</a>
        <a href="#" > <i class="fas fa-map"></i> Namibia, Windheok, Dorado Park - 3045</a>
        </div>


        <div class="box">


           <h3>Follow Us </h3>
           <a href="#"><i class="fab fa-facebook "></i>facebook </a>
           <a href="#"><i class="fab fa-twitter"></i>twitter </a>
           <a href="#"><i class="fab fa-instagram "></i>instagram </a>
           <a href="#"><i class="fab fa-linkedin"></i>linkedin </a>
         



        </div>


</div>


</bn>
<br><br><br>
<center><div class="credit"> created by <span>Dan Kibwika</span> | all rights reserverd!</div></center>

</section>




<!--custom swipper js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!--custom js file-->
    <script src="js/myScript.js"></script>

</body>

</html>