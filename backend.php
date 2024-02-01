<?php
function getRemainingCount($selectedOption) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elective";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $limit = 5;

    $sqlCount = "SELECT COUNT(*) as submission_count FROM form_submissions WHERE selected_option = '$selectedOption'";
    $resultCount = $conn->query($sqlCount);

    if ($resultCount && $resultCount->num_rows > 0) {
        $row = $resultCount->fetch_assoc();
        $submissionCount = $row['submission_count'];
        $remainingCount = $limit - $submissionCount;
        return max(0, $remainingCount); // Ensure non-negative remaining count
    }

    $conn->close();
    return 0;
}

function getResponses($selectedOption) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elective";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlResponses = "SELECT * FROM form_submissions WHERE selected_option = '$selectedOption'";
    $resultResponses = $conn->query($sqlResponses);

    $responses = array();

    if ($resultResponses && $resultResponses->num_rows > 0) {
        while ($row = $resultResponses->fetch_assoc()) {
            $responses[] = $row['selected_option'];
        }
    }

    $conn->close();
    return $responses;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST["option"];

    // Validate and sanitize the input as needed

    // Check the submission limit for the selected option
    $remainingCount = getRemainingCount($selectedOption);

    if ($remainingCount > 0) {
        // Insert data into the database
        $conn = new mysqli("localhost", "root", "", "elective");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sqlInsert = "INSERT INTO form_submissions (selected_option) VALUES ('$selectedOption')";

        if ($conn->query($sqlInsert) === TRUE) {
            // Successfully inserted into the database
            // You may want to redirect the user or provide a success message
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Limit reached for the selected option: 5";
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['updateOptionCount'])) {
    // Handle AJAX request for updating option counts
    $selectedOption = ''; // Set the selected option as needed
    $remainingCount = getRemainingCount($selectedOption);
    echo json_encode($remainingCount);
    exit;
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['updateResponses'])) {
    // Handle AJAX request for updating responses
    $selectedOption = ''; // Set the selected option as needed
    $responses = getResponses($selectedOption);
    echo json_encode($responses);
    exit;
}
?>
