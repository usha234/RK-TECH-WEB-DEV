<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "form_system1");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$_SESSION['total']=$_POST['totalElectives'];

$id = $_REQUEST['id'];
$elective1_limit = $_REQUEST['elective1_limit'];
$elective2_limit = $_REQUEST['elective2_limit'];
$elective3_limit = $_REQUEST['elective3_limit'];
$elective4_limit = $_REQUEST['elective4_limit'];
$elective5_limit = $_REQUEST['elective5_limit'];

$_SESSION['e1']=$_POST['elective1_limit'];
$_SESSION['e2']=$_POST['elective2_limit'];
$_SESSION['e3']=$_POST['elective3_limit'];
$_SESSION['e4']=$_POST['elective4_limit'];
$_SESSION['e5']=$_POST['elective5_limit'];


// // Replace the existing record or insert a new one
 $updateQuery = "UPDATE admin_settings SET elective1_limit = '$elective1_limit', elective2_limit = '$elective2_limit',elective3_limit = '$elective3_limit',elective4_limit = '$elective4_limit',elective5_limit = '$elective5_limit' WHERE id = '$id'";
// $sql = "INSERT INTO admin_settings VALUES ('$id','$elective1_limit','$elective2_limit','$elective3_limit','$elective4_limit','$elective5_limit')";
// if (mysqli_query($conn, $sql)){
//    echo "sucsess";
// }
if (mysqli_query($conn, $updateQuery)) {
    // Success
    echo "success";
    echo $_SESSION['total'];
    header('Location: admin.html');
} else {
    // Error
    header('Location: admin.php');
}

mysqli_close($conn);
?>