
<!-- ========================================================================================================================================================================== -->
<!-- //MY PHP STARTS  HERE  -->
<!-- ========================================================================================================================================================================== -->
<?php

include "config.php";



?>



<!-- // Check if image file is a actual image or fake image -->








<!-- ========================================================================================================================================================================== -->
<!-- //MY PHP ENDS  HERE  -->
<!-- ========================================================================================================================================================================== -->
<html>

<head>
    <title>ComingEvent</title>
    <meta charset = "utf-8">
    <meta http_equiv = "X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>ComingEvent</title>


<link rel="alternate"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/style2.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link rel ="stylesheet" href="css/starter-template.css";>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<!-- ========================================================================================================================================================================== -->
<!-- //MY SYLESHEET STARTS  HERE  -->
<!-- ========================================================================================================================================================================== -->

<style>



@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap');



*{

    font-family: 'Poppins', sans-serif;
    margin:0;padding:0;box-sizing:border-box;
    outline:none;border:none;text-decoration:none;
    text-transform: capitalize;

}



:root{

--main-color:#2983f0;
--black:#222;
--white:#fff;
--light-black:#777;
--light-white:#fff9;
--dark-bg:rgba(0,0,0,.7);
--light-bg:#eee;
--border:1rem solid var(--black);
--box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
--text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);


}

html{


    font-size: 32.5%;
    overflow-x: hidden;

}

html::-webkit-scrollbar{
width :1rem;
}

html::-webkit-scrollbar-track{
  background-color: var(--main-color);

}




















/* ===================================================================================================================== */
/* HEADER- STARTS HERE */
/* ===================================================================================================================== */


section{

padding: 5rem 5%;

}



@keyframes fadeIn {

0%{

transform: scale(0);
opacity:0 ;

}

}





body{
    /* background: #9ac0ee; */
   
}

.staffMember{


     background: #b9bbbd;
     padding : 24rem 4rem;
     border   : solid #ffffff 1px;

}
.staffMember  form {

    font-size: 3.5rem;



}

.staffMember  form #submit{

 padding: 10px 10px 10px 10px;
 font-size:18px;



}

h3 {

font-size : 20px;


}

textarea{

width:50%;
height:30%;


}

label {

    width:50px;
    height:30px;

}
.textInput{


    width:25%;
    height:30px;


}



.row{


position: absolute;
width : 90%;
margin-left: 5%;

}

.row .col-md-12 {
    /* background-color: #ffffff; */
  padding:5%;
  text-align: center;
 
}

.table_header{

    color : var(--black);
    background-color:#5da4e7 ;
 


}



.table{


margin:1%;
padding:10px;
/* background: #cfe0ef; */
border : solid 1px #e7eff7 ;
width:100%;
text-align:center;


}



</style>

<!-- ========================================================================================================================================================================== -->
<!-- //MY SYLESHEET ENDS  HERE  -->
<!-- ========================================================================================================================================================================== -->

</head>

<body>
    


<?php


if(isset($_SESSION['message'])){

    echo $_SESSION['message'];
    unset($_SESSION['message']);

}


?>

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



<!-- 
==================================================================================================================== -->
<!-- 
//DISPLAYING MY DATA FROM THE BACKEND TO THE STUFF-ADMIN INTERFACE  -->
<!-- 
==================================================================================================================== -->


 
<div class = "container mt-5">

            <div class="row">

                    <div class="col-md-12">

                            <div class="card">

                            <h1 style ="font-size:15em;">UP COMING EVENTS STAY TUNED</h1>

                                <div class="card-header">



                                <?php

                               

                                  $querySelect = "select* from stuff order by id ASC ;";
                                  $query_run = mysqli_query($conn, $querySelect);

                                ?>

                                            <table class="table" style="background:#4790d0">

                                          
                                            <tr class="table_header" >
                                                
                                                <!-- <th> Event</th> -->

                                                
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

                                                                <tr class="table_headerInSql">
                                                                   
                                                                    <td style ="font-size:3em;"> <?php  echo $row[ 'event_name'] ?> </td>

                                                                   
                                                                   
                                                                    <td style ="padding:5em;">  </td>
                                                                 
                                                                    <td> <img  alt="no image1"style = "paading:0; width: 7em;  border-radius:10%;" width ="100px" src="<?php  echo $row['authorPicture'] ;?>"> </td> <br>
                                                                    

                                                                 </tr>
                                                                 <tr>
                                                                         <td  style = " background-color:#f6f6f6; font-size : 18px; padding:3%;">   </td>
                                                            </tr>

                                                                <br>


                                                            <tr>

                                            <th style="font-size:1.1em;color:#ffffff">More about the Event</th>
                                            <th style ="marging-left:3em;color:#ffffff">Speaker</th>
                                            <td><?php  echo $row[ 'author_name'] ?></td>
                                            </tr>

                                               <tr>
                                               <td> <?php  echo $row['more_about_the_event'] ?> </td>

                                               
                                               </tr>

                                               <tr>

                                                <th style="color:#ffffff" >Deadline</th>
                                                <th style ="marging-left:3em;color:#ffffff">Venue</th>
                                                <td style="color:#c4d1dc"><?php  echo $row[ 'venue'] ?></td>
                                                </tr>

                                                <tr>
                                                <td> <?php  echo $row['dealine'] ?> </td>

                                                
                                                </tr>


                                                                <tr>
                                                                         <td  style = " background-color:#f6f6f6;">   </td>
                                                                         
                                                                         <td  style = " background-color:#f6f6f6;">   </td>
                                                                         
                                                                         <td  style = " background-color:#f6f6f6;">   </td>
                                                            </tr>



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
                                            <tr>
                                                

                                          

                                            </tr>

                                            <div  class="timeBox" style ="dislay:flex; background:url('pictures/3ba28909-b0bf-4720-8fd1-0d9ee42f5332_rw_600.gif');margin-left:2em;"  >

                                            <h1 style ="font-size:8em;">Science</h1> <br><br> 

                                                 <p  style ="font-size:3em; padding:3em;"></p>

                                            </div>
                                            <div  class="timeBox" style ="dislay:flex;background:#1ad540; margin-left:2em;" >

                                                <h1 style ="font-size:8em;color:blue">For Life</h1> <br><br> 

                                                    <p  style ="font-size:3em;"> </p>

                                                </div>
                                           
                                            </table>
                                
                                            

                                                <br>
                                                <br>
                                                <br>


                                            
                                </div>

                            
                            
                            </div>
                    </div>

            </div>
            </br>  </br>  </br>




    </div>
    </center>





</body>
</html>