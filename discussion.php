

<html lang="en">

<head>

<meta charset = "utf-8">
<meta http_equiv = "X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>discusssion</title>




<link rel="alternate"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php


include "config.php";

?>

<style>
.checked {
  color: orange;
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

<div style ="background-image:url(../pictures/...)" class="heading">

<h1>Discussion</h1>

</div>


<!-- middle_about_us_content ENDS HERE -->



<!-- ====================================================================================================== ====================================================-->
<!-- DISCUSSION US STARTS HERE   -->
<!-- ====================================================================================================== ====================================================-->



 

  <div class="discusssion">


        <div class="pofil">


        <table>

            




        <?php

                                                        $querySelect = "select* from  upComingevents order by id ASC ;";
                                                        $query_run = mysqli_query($conn, $querySelect);

                                                        if(mysqli_num_rows($query_run) >0){

                                                            foreach( $query_run as $row ){


                                                               ?>

                                                                        <tr>
                                                                         <td  style = " background-color:#f6f6f6; font-size : 18px; padding:1%;">   </td>
                                                            </tr>

                                                                <tr class="table_headerInSql">
                                                                   

                                                                   
                                                                   
                                                                    <td style ="padding:5em;">  </td>
                                                                 
                                                                    <td> <img  alt="no image1"style = "pading:0; width: 4em;  border-radius:10%;" width ="100px" src="<?php  echo $row['authorPicture'] ;?>"> </td> <br>
                                                                    

                                                                 </tr>
                                                                 <tr>
                                                                         <td  style = " background-color:#f6f6f6; font-size : 18px; padding:1%;">   </td>
                                                            </tr>

                                                                <br>

                                                                


                                                            <tr>

                                            

                                                
                                                <th style ="marging-left:3em;color:#000000; ">Article</th>
                                                <td style="color:#c333130;font-size:1em; background:#ffcba0;padding:2em;"><?php  echo $row['discussion'] ?></td>
                                                <td style="color:#c4d1dc;font-size:1em;padding:1em;"></td>
                                                </tr>

                                                

                                                                <tr>
                                                                         <td  style = " background-color:#f6f6f6;">   </td>
                                                                         
                                                                         <td  style = " background-color:#f6f6f6;">   </td>
                                                                         
                                                                         <td  style = " background-color:#f6f6f6;">   </td>
                                                            </tr>


                                                            <!-- //STARS HERE  -->
                                                            <th >

                                                            <td > 

                                                                    <div style = "margin-left:2em;" class="stardiv">

                                                                    <h2>Rating</h2>

                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star checked"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                      
                                                                    </div>
<!-- //credit to W3SCHOOL -->


                                                            </td>
                                                            

                                                            </th>
                                                              <!-- //STARS HERE  -->

                                              <div>

                                                               


                                              </div>
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
                </table>
        </div>
     






  </div>




<!-- ====================================================================================================== ====================================================-->
<!-- DISCUSSION US ENDS HERE   -->
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