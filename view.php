<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Records</title>
<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

form {
    margin-bottom: 20px;
}

select {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #FFD1E3;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}
body {
    background-image: url('back.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }

  h2 {
    background: transparent;

    backdrop-filter: blur(15px);
  }
  
    .b {
      height: 100%;

      background-image: url("adm.jpg");
      background-repeat: no-repeat;
      background-size: cover, contain;
      width: 100%;
      position: absolute;
      z-index: -1;


  }

  .bg-1 {

      z-index: 0;
      background: linear-gradient(to right, rgba(149, 14, 127, 0.179) 30%, rgba(242, 212, 20, 0.667) 65%, rgba(177, 30, 179, 0.5));
      background-size: 200% 200%;
      animation: gradient-animation 16s ease infinite;
      padding-left: 10px;
      height: 40%;
      padding-top: 6%;
      position: absolute;

      border-radius: 0px 0px 25% 25%/40%;

  }


  @keyframes gradient-animation {
      0% {
          background-position: 0% 50%;
      }

      25% {
          background-position: 50% 100%;
      }

      50% {
          background-position: 100% 50%;
      }

      75% {
          background-position: 50% 0%;
      }

      100% {
          background-position: 0% 50;
      }
  }

</style>
  

<body>




</head>
<body>
<div class="b">

<div class="jumbotron container-fluid bg-1 text-center ">


</div>

<div class="container">
    <h2>Student Records</h2>
    <form action="" method="post">
        <?php
        $options = array("CSE-AI", "EEE", "ECE", "CIVIL", "MECH", "CSM", "CSD", "CSE", "CSO");
        echo "<select name='nc'>";
        echo "<option>Choose the branch</option>";
        foreach ($options as $option) {
            echo "<option value='$option'>$option</option>";
        }
        echo "</select>";
        echo "<button type='submit'>Submit</button>";
        ?>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'form_system1');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $n = $_POST['nc'];
        echo "<h3>Selected Branch: $n</h3>";

        $query = "SELECT studentName, rollnumber, elective1, elective2, elective3, elective4, elective5 FROM student WHERE branch='$n'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr>
                    <th>SNO</th>
                    <th>NAME</th>
                    <th>ROLL NUMBER</th>
                    <th>Elective1</th>
                    <th>Elective2</th>
                    <th>Elective3</th>
                    <th>Elective4</th>
                    <th>Elective5</th>
                    
                  </tr>";

            $sn = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$sn}</td>
                        <td>{$row['studentName']}</td>
                        <td>{$row['rollnumber']}</td>
                    
                        <td>{$row['elective1']}</td>
                        <td>{$row['elective2']}</td>
                        <td>{$row['elective3']}</td>
                        <td>{$row['elective4']}</td>
                        <td>{$row['elective5']}</td>
                      </tr>";
                $sn++;
            }

            echo "</table>";
        } else {
            echo "No records found.";
        }

        $conn->close();
    }
    ?>
    <br>
    <br>
    <center>
     <button><a href="intro.html" style="color: white";>Back</a></button>
   </center> 
</div>
  
</body>
</html>
