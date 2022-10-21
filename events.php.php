

<html lang="en">

<head>

<meta charset = "utf-8">
<meta http_equiv = "X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>Events</title>

<?php 

include "config.php";

?>


<link rel="alternate"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />



<style>

.memberBoxDisplay{


background-color: #f7f7f9 ;
width : 100%;


}


.table {


    background-color: #ffffff;
    text-align :center;
    width: 100%;
    padding: 10%;


}

.table .table_headerInSql {



    padding-bottom: 2%;


}

.table tr td{
    padding: 0.3%;
   
    
}


.userBox{

display : flex;
  
}

</style>







</head>


<body>


<!--header-- STARTS HERE -->
<!--==================================================================================================================================-->


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



<!-- middle_about_us_content STARTS HERE-->

<div   style = "background-image : url(../pictures/blog-robot.jpg);"class="heading">

<h1 >Ongoing Events </h1>

</div>


<!-- middle_about_us_content ENDS HERE -->



<!-- ====================================================================================================== ====================================================-->
<!-- DAILY VERSE STARTS HERE   -->
<!-- ================
====================================================================================== ====================================================-->

<section class="memberBoxDisplay">
   <div class="boxOut">


    
   <?php

                               

$querySelect = "select* from stuff order by id ASC ;";
$query_run = mysqli_query($conn, $querySelect);

?>

          <table class="table">

          
                               

       
        
          

      
          <?php

                      $querySelect = "select* from events order by id ASC ;";
                      $query_run = mysqli_query($conn, $querySelect);

                      if(mysqli_num_rows($query_run) >0){

                          foreach( $query_run as $row ){


                             ?>


                               </tr>
                               <tr class="table_headerInSql">
                              

                                <div style = " width: 20%; border-radius:50%;">
                                  <td> <img  alt="no image1"  style = "  width: 100%; " src="<?php  echo $row['poster_image'] ;?>"> </td> <br>
                          </div>
                               </tr>

                              

                               <tr class="table_headerInSql">
                               <td  style = " background-color:#f4f4f4 ; font-size : 18px;  padding:1%;">  </td>
                               </tr>

                             
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
</section>










<section class="about">

 <!-- for font-meseasurement em  e.g  1em = current standart font-dsize -->


<div class="content">

<h3> STAY TUNED </h3>

<p>

 With an Humble heart , here are is the Team of our  Logos-Rhema leaders 
 With an Humble heart , here are is the Team of our  Logos-Rhema leaders 
 With an Humble heart , here are is the Team of our  Logos-Rhema leaders 
 With an Humble heart , here are is the Team of our  Logos-Rhema leaders 
 With an Humble heart , here are is the Team of our  Logos-Rhema leaders 
 With an Humble heart , here are is the Team of our  Logos-Rhema leaders 


</p>










<div class="icon-container">



<div class="icon">
<i class="fas fa-map"></i>
<span>top destinations</span>
</div>


<div class="icon">
<i class="fas fa-map"></i>
<span>affordable price</span>
</div>

<div class="icon">
<i class="fas fa-map"></i>
<span>24/7 guide service </span>
</div>


</div>


</div>


</section>

















<!-- ==================================================================================== -->
<!-- //DISPLAY CHURCH MEMEBES DETAILS FROM THE BACKEND HERE  -->
<!-- ==================================================================================== -->



<!-- ==================================================================================== -->
<!-- //DISPLAY CHURCH MEMEBES DETAILS FROM THE BACKEND HERE  -->
<!-- ==================================================================================== -->







<!-- ====================================================================================================== ====================================================-->
<!-- ABOUT US ENDS HERE   -->
<!-- ====================================================================================================== ====================================================-->









<!--custom swipper js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!--custom js file-->
    <script src="js/myScript.js"></script>






<!--header-- ENDS HERE -->
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

</body>

</html>