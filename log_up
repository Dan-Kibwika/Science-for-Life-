

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
  

          




         if(isset($_POST["sign_up"])){


          
            $email = strtolower($_POST['mail']);
            $org  = strtolower($_POST['organization']);

             if ( (isset($email) && !empty($email))){


                     $sqlselect = "SELECT* FROM  user WHERE email = '".strtolower($email)."' AND Organization = '". strtolower($org) ."' limit 1";

                    $q = mysqli_query($conn, $sqlselect);
                                                              
                      $rows = mysqli_num_rows($q);
                      

                      if($rows == 1){

                        header('Location: home.php');

                      }
                      else {

                        echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">user not registered </p>';
                      }
                     

                                                 
                                            

             }
             else{

                echo '<p style =" background-color :#f14c4c; padding : 10px; font-size : 18px; color :white;">Access denied</p>';

             }

        
         }

         elseif(isset($_POST['back'])){
         
            header('Location: indexLog.php');
           
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


                   
                    <label class="LabIn" for="">Email </label> <input class="LabIn" type="text" name ="mail" > <br><br>
                    <label class="LabIn" for="">Organization </label> <input class="LabIn" type="text" name ="organization" ><br><br>


                 
                  
                  
                    <input  type="submit" value = "Sign Up" name = "sign_up" class="buttonnIn">
                    <input class="buttonnIn" type="submit" value = "Back"name = "back" >

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