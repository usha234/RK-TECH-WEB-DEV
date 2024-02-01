<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
  
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        select,
        input[type="radio"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            appearance: none;
            background: url('arrow-down.png') no-repeat right;
            background-size: 20px;
            padding-right: 30px;
        }

        input[type="radio"] {
            margin-right: 5px;
            vertical-align: middle; /* Align radio buttons with text */
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
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
    <form id="registrationForm" action="student_form.php" method="post">
        <!-- Your common fields -->
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName" required>

        <label for="rollNumber">Roll Number:</label>
        <input type="text" id="rollNumber" name="rollNumber" required>

        <label>Branch:</label>
        <select name="branch" required>
            <option value="branch1">Branch 1</option>
            <option value="branch2">Branch 2</option>
        </select>

        <?php
for ($i = 1; $i <= $total; $i++) {
    echo "<label>Elective $i:</label>";

    $etn = "elective" . $i;
    $m = "SELECT $etn FROM $etn";
    $re = $conn->query($m);

    while ($row2 = $re->fetch_assoc()) {
        $subject = $row2[$etn];
        $disabled = ($elective_limits[$i] <= 0) ? 'disabled' : '';
        echo "<input type='radio' name='elective$i' value='$subject' required $disabled>$subject<br>";
    }
}
echo '<script>
        function checkLimit(electiveNumber) {
            alert("Checking limit for Elective " + electiveNumber);
            // Add your logic for checking the limit and disabling options here
        }
      </script>';
        ?>

        <button type="submit">Submit</button>
    </form>

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
