<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>

    <style>
        
      




    </style>
</head>

<body>
    <?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "form_system1");
    $total = isset($_SESSION['total']) ? $_SESSION['total'] : 0;
    $elective_limits = [
        1 => isset($_SESSION['e1']) ? $_SESSION['e1'] : 0,
        2 => isset($_SESSION['e2']) ? $_SESSION['e2'] : 0,
        3 => isset($_SESSION['e3']) ? $_SESSION['e3'] : 0,
        4 => isset($_SESSION['e4']) ? $_SESSION['e4'] : 0,
        5 => isset($_SESSION['e5']) ? $_SESSION['e5'] : 0,
    ];
    ?>

    <h2>Welcome to the Student Form</h2>

    <div class="container">
        <h1 class="form-title">Registration</h1>
        <form id="registrationForm" action="student_form.php" method="post">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="studentName">Student Name:</label>
                    <input type="text" id="studentName" name="studentName" required>

                </div>
                <div class="user-input-box">
                    <label for="rollNumber">Roll Number:</label>
                    <input type="text" id="rollNumber" name="rollNumber" required>
                </div>


                <div class="user-input-box">
                    <label>Branch:</label>
                    <select name="branch" required>
                        <option value="branch1">CSE-AI</option>
                        <option value="branch2">CSO</option>
                        <option value="branch3">CIVIL</option>
                        <option value="branch4">MECHANICAL</option>
                        <option value="branch5">ECE</option>
                        <option value="branch6">EEE</option>
                        <option value="branch7">CSE</option>
                        <option value="branch8">CSD</option>
                        <option value="branch9">CSM</option>


                    </select>
                </div>

            </div>


            <?php
            for ($i = 1; $i <= $total; $i++) {
                echo "<div class='sub-details'>"; 
                echo "<label class='sub-title'>Elective $i:</label>"; 

                $etn = "elective" . $i;
                $m = "SELECT $etn FROM $etn";
                $re = $conn->query($m);

                echo "<div class='sub-cate'>"; 
                while ($row2 = $re->fetch_assoc()) {
                    $subject = $row2[$etn];
                    $disabled = ($elective_limits[$i] <= 0) ? 'disabled' : '';
                    echo "<input class='form-radio' type='radio' name='elective$i' value='$subject' required $disabled>$subject<br>"; // Add the form-radio class to the input
                }
                echo "</div>"; 
                echo "</div>"; 
            }
            ?>
            <div class="form-submit-btn">
              
            <input type="submit" value="Register">
            </div>
        </form>

    </div>

    <script>
        function handleRadioClick(electiveNumber) {
            var clickCount = parseInt(localStorage.getItem(`clickCount${electiveNumber}`)) || 0;
            clickCount++;
            localStorage.setItem(`clickCount${electiveNumber}`, clickCount);
            alert(`Option clicked ${clickCount} times for Elective ${electiveNumber}`);
        }
    </script>
</body>

</html>