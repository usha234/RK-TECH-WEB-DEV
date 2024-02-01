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
<?php 
    session_start();
$tot=$_SESSION['total'];

$e1=$_SESSION['e1'];

$e2=$_SESSION['e2'];

$e3=$_SESSION['e3'];
$e4=$_SESSION['e4'];
$e5=$_SESSION['e5'];
echo $tot,$e1,$e2,$e3,$e4,$e5;


?>



<body>



<script>
document.addEventListener("DOMContentLoaded", function () {
    var elective1Limit = parseInt("<?php echo $_SESSION["e1"]+1 ?>") || 0;
    var elective2Limit = parseInt("<?php echo $_SESSION["e2"]+1 ?>") || 0;



    console.log('elective1Limit:', elective1Limit);
    console.log('elective2Limit:', elective2Limit);

    var elective1Option1Count = parseInt(localStorage.getItem('elective1Option1Count')) || 0;
    var elective1Option2Count = parseInt(localStorage.getItem('elective1Option2Count')) || 0;
    var elective2Option1Count = parseInt(localStorage.getItem('elective2Option1Count')) || 0;
    var elective2Option2Count = parseInt(localStorage.getItem('elective2Option2Count')) || 0;

    // Attach click event listeners to the radio buttons
    document.querySelectorAll('input[name="elective1"]').forEach(function (radio) {
        radio.addEventListener('click', function () {
            handleOptionClick('elective1', this.value);
        });
    });

    document.querySelectorAll('input[name="elective2"]').forEach(function (radio) {
        radio.addEventListener('click', function () {
            handleOptionClick('elective2', this.value);
        });
    });

    // Attach click event listener to the "Reset Counts" button
    document.getElementById('resetCountsButton').addEventListener('click', function () {
        // Reset counts to zero
        elective1Option1Count = 0;
        elective1Option2Count = 0;
        elective2Option1Count = 0;
        elective2Option2Count = 0;

        // Update counts in localStorage
        localStorage.setItem('elective1Option1Count', elective1Option1Count);
        localStorage.setItem('elective1Option2Count', elective1Option2Count);
        localStorage.setItem('elective2Option1Count', elective2Option1Count);
        localStorage.setItem('elective2Option2Count', elective2Option2Count);

        // Check if the limits are reached and disable options accordingly
        checkLimits();
    });

    // Update hidden input fields with the latest counts
    document.querySelector('button[type="submit"]').addEventListener('click', function () {
        // Update counts
        localStorage.setItem('elective1Option1Count', elective1Option1Count);
        localStorage.setItem('elective1Option2Count', elective1Option2Count);
        localStorage.setItem('elective2Option1Count', elective2Option1Count);
        localStorage.setItem('elective2Option2Count', elective2Option2Count);

        // Show an alert with the counts
        alert("Counts after submission:\n" +
            "Elective 1 Option 1 Count: " + elective1Option1Count + "\n" +
            "Elective 1 Option 2 Count: " + elective1Option2Count + "\n" +
            "Elective 2 Option 1 Count: " + elective2Option1Count + "\n" +
            "Elective 2 Option 2 Count: " + elective2Option2Count);
    });

    function handleOptionClick(elective, option) {
        console.log('elective1Limit:', elective1Limit);
        console.log('elective2Limit:', elective2Limit);

        // Increment the respective count based on the clicked option
        if (elective === 'elective1') {
            if (option === 'Option 1' && elective1Option1Count < elective1Limit) {
                elective1Option1Count++;
            } else if (option === 'Option 2' && elective1Option2Count < elective1Limit) {
                elective1Option2Count++;
            }
        } else if (elective === 'elective2') {
            if (option === 'Option 1' && elective2Option1Count < elective2Limit) {
                elective2Option1Count++;
            } else if (option === 'Option 2' && elective2Option2Count < elective2Limit) {
                elective2Option2Count++;
            }
        }

        // Check if the limits are reached and disable options accordingly
        checkLimits();
    }

    function checkLimits() {
        disableOptions('elective1', 'Option 1', elective1Option1Count >= elective1Limit);
        disableOptions('elective1', 'Option 2', elective1Option2Count >= elective1Limit);
        disableOptions('elective2', 'Option 1', elective2Option1Count >= elective2Limit);
        disableOptions('elective2', 'Option 2', elective2Option2Count >= elective2Limit);
    }

    function disableOptions(elective, option, disable) {
        // Disable the specified option
        document.querySelector(`input[name="${elective}"][value="${option}"]`).disabled = disable;
    }
});


</script>

<form id="registrationForm" action="student_form.php" method="post">
    <input type="hidden" name="elective1Option1Count" id="elective1Option1Count" value="0">
    <input type="hidden" name="elective1Option2Count" id="elective1Option2Count" value="0">
    <input type="hidden" name="elective2Option1Count" id="elective2Option1Count" value="0">
    <input type="hidden" name="elective2Option2Count" id="elective2Option2Count" value="0">
    <label for="studentName">Student Name:</label>
    <input type="text" id="studentName" name="studentName" required>

    <label for="rollNumber">Roll Number:</label>
    <input type="text" id="rollNumber" name="rollNumber" required>

    <label>Branch:</label>
    <select name="branch" required>
        <option value="branch1">Branch 1</option>
        <option value="branch2">Branch 2</option>
        <!-- Add more branches as needed -->
    </select>

    <label>Elective 1:</label>
    <input type="radio" name="elective1" value="Option 1" required> Option 1
    <input type="radio" name="elective1" value="Option 2" required> Option 2


    <!-- Add more options as needed -->

    <label>Elective 2:</label>
    <input type="radio" name="elective2" value="Option 1" required> Option 1
    <input type="radio" name="elective2" value="Option 2" required> Option 2


    <!-- Add more options as needed -->

    <button id="resetCountsButton" type="button">Reset Counts</button>


    <button type="submit">Submit</button>
</form>

</body>
</html>