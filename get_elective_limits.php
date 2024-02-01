<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "form_system");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Fetch elective limits from the admin_settings table
$query = "SELECT elective1_limit, elective2_limit FROM admin_settings WHERE id = 0"; // Change '1' to the appropriate admin_settings record ID
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $elective1Limit = $row['elective1_limit'];
    $elective2Limit = $row['elective2_limit'];

    // Return limits as JSON
    echo json_encode(array('elective1Limit' => $elective1Limit, 'elective2Limit' => $elective2Limit));
    





} else {
    // Error handling
    echo json_encode(array('error' => 'Unable to fetch elective limits.'));
}

mysqli_close($conn);
?>
