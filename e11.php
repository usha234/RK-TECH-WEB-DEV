<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "form_system1");
if($conn === false){

    die("ERROR: Could not connect. "

        . mysqli_connect_error());

}

$names = $_POST["mytext"];
   
   // insert data into database
   foreach ($names as  $name) {
     
     $sql = "INSERT INTO elective1  VALUES ('$id','$name')";
     $g=mysqli_query($conn, $sql);
   }
     if($g){
        $_SESSION['status']="Successfully Inserted.....";
        header('Location: e1.php');
     }
     else{
        $_SESSION['status']="Insertion Failed";
        header('Location: e1.php');
     }
    