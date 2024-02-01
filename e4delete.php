<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "form_system1");
if($conn === false){

    die("ERROR: Could not connect. "

        . mysqli_connect_error());

}

//   delete
  if(isset($_REQUEST['dele'])){
   $de=$_REQUEST['D'];

    $e="DELETE from elective4 where elective4='$de'";
    $rt=mysqli_query($conn,$e);
  }   

  if($rt){
      $_SESSION['status']="Data deleted successfully.... ";
      header('Location: e4.php');
  }
  else{
          $_SESSION['status']="Error in deletion...";
          header('Location: e4.php');
      }
  
?>