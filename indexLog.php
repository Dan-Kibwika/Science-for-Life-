

<html lang="en">

<head>

<meta charset = "utf-8">
<meta http_equiv = "X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>about</title>




<link rel="alternate"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />







<!-- ========================================================================================== -->
<!-- //PHP HERE -->
<!-- ========================================================================================== -->


    <?php


        include "config.php";
  

          




         if(isset($_POST["sign_in"])){


            $firstName = $_POST['firstName'];
            $surName = $_POST['surName'];
            $email = $_POST['mail'];
           $org  = $_POST['organization'];

             if ((isset($firstName) && !empty($firstName)) && (isset($surName ) && !empty($surName )) && (isset($email) && !empty( $email))){


                     $sqlInsert = " INSERT INTO user (firstName,  surename,  email, Organization ) VALUES ( '". $firstName."',  '".$surName."',  '".$email."', '".$org ."' )";

                                    $q = mysqli_query($conn,  $sqlInsert);
                                                echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">You are registered.</p>';
                                               if (!$q) die(mysqli_error($db));
                                            

             }
             else{

                echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">Enter your Creditial</p>';

             }

        
         }

         elseif(isset($_POST['sign_up'])){



            header('Location:index.php');

                if (isset($_POST['sign_in'])){
   
                    header('Location:indexLog.php');


                }

            
         
         }

         

      


     ?>




<!-- ========================================================================================== -->
<!-- //PHP HERE -->
<!-- ========================================================================================== -->

<style>


body {

    background: #a9d5e6;
}
  .fromInfo{

    background: #ebedee;
    width:100em;
    padding :10em;
    margin-top:30em;

  }

  label{

    font-size : 24px;
  }
.buttonnIn {

   margin:2em;
   display:block;
   background:#3bb5e5 ;
   border-radius: 5px;
   width:6em;
   height : 3em;
   text-align:center;
   cursor: pointer


  }

  .LabIn{

    display:block;
  }


</style>



<!-- ========================================================================================== -->
<!-- //STYLESHEET HERE -->
<!-- ========================================================================================== -->


</head>


<body>

<center>




        <div class="fromInfo">



                <form action="" method ="post" enctype = "multipart/form-data">


                    <label class="LabIn" for="">Firstname </label> <input class="LabIn" type="text" name ="firstName" > <br><br>
                    <label class="LabIn" for="">Surname </label> <input class="LabIn" type="text" name ="surName" > <br><br>
                    <label class="LabIn" for="">Email </label> <input class="LabIn" type="text" name ="mail" > <br><br>
                    <label class="LabIn" for="">Organization </label> <input class="LabIn" type="text" name ="organization" ><br><br>
                    


                 
                  
                    <input class="buttonnIn" type="submit" value = "Sign in"name = "sign_in" >
                    <input  type="submit" value = "Sign Up" name = "sign_up" class="buttonnIn">

                </form>



        </div>



</center>

<br><br><br><br><br><br><br><br>
 

 

  










<!--custom swipper js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!--custom js file-->
    <script src="js/myScript.js"></script>






<!--header-- ENDS HERE -->
<!--==================================================================================================================================-->












</body>

</html>