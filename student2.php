<?php
session_start();
        $conn = mysqli_connect("localhost", "root", "", "form_system");

$_SESSION["us"] = $_REQUEST['e1'];
$_SESSION["ha"] = $_REQUEST['e2'];
echo $_SESSION["us"];
echo $_SESSION['ha'];

 header('Location: student1.php');



?>        