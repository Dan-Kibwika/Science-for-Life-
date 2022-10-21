<?php



// =============
// FIRST CONNECTION
// =============




session_start();

// variables 

$host       =  "localhost";
$user       =  "root";
$password   =  "dankibwika18072001";
$dbname     =  "scienceForLife";


// create connection or connector string 

$conn = mysqli_connect($host,$user,$password,$dbname);


//check the connection 

 
if(!$conn){

die("Connection failed: ".mysqli_connect_error());

}

?>