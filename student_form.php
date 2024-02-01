<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
       
		$conn = mysqli_connect("localhost", "root", "", "form_system1");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		$studentName = $_REQUEST['studentName'];
		$rollNumber = $_REQUEST['rollNumber'];
		$branch = $_REQUEST['branch'];


		$elective1 = $_REQUEST['elective1'];
		$elective2 = $_REQUEST['elective2'];
		$elective3 = $_REQUEST['elective3'];
		$elective4 = $_REQUEST['elective4'];
		$elective5 = $_REQUEST['elective5'];


		$sql = "INSERT INTO student VALUES ('$studentName',
			'$rollNumber','$branch','$elective1','$elective2','$elective3','$elective4','$elective5')";

        if (mysqli_query($conn, $sql)) {
            
            
            header('Location: response.html');
        } else {

             header('Location: student_form.php');
        }
		
	
		mysqli_close($conn);
		?>
	</center>
</body>
       <button> <a href="student1.php">BACK</a></button>
</html>
