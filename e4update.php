<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "form_system1");
if($conn === false){

    die("ERROR: Could not connect. "

        . mysqli_connect_error());

}
// update
 if(isset($_REQUEST['update'])){
    $d=$_REQUEST['B'];
    $v=$_REQUEST['C'];
    //echo $v;
    //echo $d;
    $t="UPDATE elective1 SET elective4 ='$d' where elective4='$v' ";
    $q=mysqli_query($conn,$t);
   
 }
  if($q){
      $_SESSION['status']="New data is Updated successfully.... ";
      header('Location: e4.php');
  }
  else{
          $_SESSION['status']="Updation Failed";
          header('Location: e4.php');
      }

   

    



 ?>