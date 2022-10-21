
<!-- ========================================================================================================================================================================== -->
<!-- //MY PHP STARTS  HERE  -->
<!-- ========================================================================================================================================================================== -->
<?php

include "config.php";







// Check if image file is a actual image or fake image




if(isset($_POST["upload"])) {

    $event = $_POST["event_name"];
    $topic    = $_POST['topic'];
    $comment    = $_POST['comment'];
    $_dealine = $_POST['deadline'];
    $_author_name = $_POST['authorName'];
    $_discussion = $_POST['discussion'];
    $venue = $_POST['venue'];


     if(isset($_FILES["media"]["name"]) && $_FILES["media"]["name"] !=''){

    $target_dir = "stuff_picture/";
    $target_file = $target_dir .basename($_FILES["media"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   


  

  $check = getimagesize($_FILES["media"]["tmp_name"]);
  if($check !== false) {
    echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">File is an image - '. $check["mime"] . '. </p>';
    $uploadOk = 1;

 

    
    
    $file_name = $target_dir.basename($_FILES["media"]["name"]);





                            // Check file size
                            if ($_FILES["media"]["size"] > 5242880 ) {
                                echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">Sorry, your file is too large.</p>';
                                $uploadOk = 0;


                            }

                            else{


                                        if ($uploadOk == 0) {
                                            echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">Sorry, your file was not uploaded.</p>';
                                        // if everything is ok, try to upload file
                                        } 
                                        
                                        else {

                                          

                                            if (move_uploaded_file($_FILES["media"]["tmp_name"], $file_name)) {

                                                
                                               
                                                      

             

                                                
                                                $sqlinsert = " INSERT INTO upComingevents (event_name,dealine,venue ,more_about_the_event , topics,author_name ,discussion ,authorPicture ) 
                                                VALUES ('".$event."','". $_dealine."','".$venue."' , '". $comment ."' , '". $topic  ."','". $_author_name."','".  $_discussion."' ,'".$target_file."');";
                                                $q = mysqli_query($conn, $sqlinsert);
                                                echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">The profil has been uploaded .</p>';
                                               if (!$q) die(mysqli_error($db));
                                            
                                            } 
                                            
                                            else {


                                                
                                            echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">Sorry, there was an error uploading your file.</p>';
                                            }

                                        }
                            }

                                }
                                
                                else {
                                    echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">File is not an image.';
                                    $uploadOk = 0;
                                  }
                           









                                }
                                else{

                                    echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">Please select a picture.';
                                    
                                }


  } 





?>



<!-- ========================================================================================================================================================================== -->
<!-- //MY PHP ENDS  HERE  -->
<!-- ========================================================================================================================================================================== -->
<html>

<head>
    <title>upComingevents</title>
    <meta charset = "utf-8">
    <meta http_equiv = "X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming_Event</title>



  


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
    background: #9ac0ee;
   
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

background-color: #fff;
position: absolute;
width : 90%;
margin-left: 5%;

}

.row .col-md-12 {
  padding:5%;
  text-align: center;
 
}

.table_header{

    color : var(--white);
    background-color:#5da4e7 ;
 


}



.table{


margin:1%;
padding:10px;
background: #cfe0ef;
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


<a href="index.php" >home</a>
<a href="events.php" >Events </a>
<a href="ComingEventAdmin.php" >Up coming event</a>
<a href="about.php" >About us </a>



</nav>


<div id="menu-btn" class="fas fa-bars"><img width="40%" src="pictures/sdjsjohsc.jpg" alt=""></div>



</section>


<section class="headersec">


<h3 >Add a new Stuff member</h3>

<center>
<div class="staffMember" >
            <form action="" method = "post" enctype = "multipart/form-data">
                
                <label for="" > Event name</label>                 <input class="textInput" style = "margin-left : 12%;" type="text" name = "event_name"><br><br>
                <label for="" >Topics</label>    <input  class="textInput" style = "margin-left : 4.5%;" type="text" name = "topic"><br><br>
                <label for="" >dealine</label>    <input  class="textInput" style = "margin-left : 4.5%;" type="text" name = "deadline"><br><br>
                <label for="" >Venue</label>    <input  class="textInput" style = "margin-left : 4.5%;" type="text" name = "venue"><br><br>
                <label for="" >Author</label>    <input  class="textInput" style = "margin-left : 4.5%;" type="text" name = "authorName"><br><br>
                <label for="" > more about the Events</label> <br><br>   <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
                <label for="" > Enter research</label> <br><br>   <textarea name="  discussion" id="" cols="30" rows="10"></textarea><br><br>
                <label for="" >Author profil picture</label>        <input  class="textInput" type="file"  name= "media"><br><br><br><br>

              
               
            <input type="submit" name = "upload" id="submit">
            </form>
</div>





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

                            <h1>Up coming events</h1>

                                <div class="card-header">



                                <?php

                               

                                  $querySelect = "select* from stuff order by id ASC ;";
                                  $query_run = mysqli_query($conn, $querySelect);

                                ?>

                                            <table class="table">


                                         
                                          
                                            <tr class="table_header" >
                                                
                                                <th> Event</th>
                                                <th> Topic </th>
                                                <th> Venue</th>
                                                <th> Deadliner</th>
                                                <th> Discussion</th>
                                                <th> More details </th>
                                                <th> Author</th>
                                                <th> Picture</th>
                                                <th> EDIT</th>
                                                <th> REMOVE</th>
                                            </tr>

                                        
                                            <?php

                                                        $querySelect = "select* from upComingevents order by id ASC ;";
                                                        $query_run = mysqli_query($conn, $querySelect);
                                                        

                                                        if(mysqli_num_rows($query_run)>0){

                                                            foreach( $query_run as $row ){


                                                               ?>

                                                                        <tr>
                                                                         <td  style = " background-color:#f6f6f6; font-size : 18px; padding:1%;">   </td>
                                                            </tr>


                                                                <tr class="table_headerInSql">
                                                                    <td> <?php  echo $row['event_name'] ?> </td>
                                                                    <td> <?php  echo $row['topics'] ?> </td>

                                                                    <td> <?php  echo $row['venue'] ?> </td>
                                                                    <td> <?php  echo $row['dealine'] ?> </td>
                                                                    <td> <?php  echo $row['discussion'] ?> </td>
                                                                
                                                                    <td> <?php  echo $row['more_about_the_event'] ?> </td>
                                                                    <td> <?php  echo $row['author_name'] ?> </td>
                                                                    <!-- <td> <?php  echo $row['authorPicture'] ?> </td> -->
                                                                    <td> <img  alt="no image1"style = "  width: 70%;  border-radius:10%;" width ="100px" src="<?php  echo $row['authorPicture'] ;?>"> </td> <br>
                                                                    
                                                                    <td> <a  class="editButton" href="">Edit</a> </td>
                                                                    <td> <a  class="editButton" href="">Delete</a>  </td>

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

                            
                            
                            </div>
                    </div>

            </div>
            </br>  </br>  </br>




</div>
</center>

</body>
</html>