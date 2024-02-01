<?php


// $servername = "localhost";
// $username = "username";
// $password = "";
// $dbname = "form_system";


$conn = mysqli_connect("localhost", "root", "", "form_system");

$sql = "SELECT DISTINCT elective1_limit FROM admin_settings where id=0";
$result = $conn->query($sql);
$sq = "SELECT DISTINCT elective2_limit FROM admin_settings where id=0";
$resul = $conn->query($sq);

// Populate the dropdown
echo "<form action='student2.php' method='post'>";
echo "<select name='e1' class='form-control'>";
echo "<option>limit for elective1 </option>";
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['elective1_limit'] . "'>" . $row['elective1_limit'] . "</option>";
}
echo "</select>";
 echo nl2br("\n");
 echo nl2br("\n");





echo "<select name='e2' class ='form-control'>";
echo "<option> limit for elective2 </option>";
while ($row1 = $resul->fetch_assoc()) {
    echo "<option value='" . $row1['elective2_limit'] . "'>" . $row1['elective2_limit'] . "</option>";
}
echo "</select>";

echo nl2br("\n");
echo nl2br("\n");



echo "<button type='submit' value='submit'>Submit</button>";
echo "</form>";
?>