<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        *{
            padding: 0;
            margin:0;
            box-sizing: border-box;
            font-family: sans-serif;

        }

        body{
            display:flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: url(adm.jpg);
            background-size: cover;
        }

        .container{
            width:100%;
            max-width:650px;
            background:rgba(0,0,0,0.5);
            padding:28px;
            margin:0 28px;
            border-radius:10px;
            box-shadow: inset -2px 2px 2px white;
        }

        .form-title{
            font-size:26px;
            font-weight: 600;
            text-align: center;
            padding-bottom: 6px;
            color:white;
            text-shadow:2px 2px 2px black;
            border-bottom:solid 1px white;

        }
        .main-user-info{
            display:flex;
            flex-wrap:wrap;
            justify-content: space-between;
            padding:20px 0;

        }

        .user-input-box:nth-child(2n){
            justify-content: end;

        }

        .user-input-box{
            display: flex;
            flex-wrap: wrap;
            width: 50%;
            padding-bottom:15px;
        }


        .user-input-box label{
            width: 95%;
            color:white;
            font-size: 20px;
            font-weight: 400;
            margin:5px 0;
        }
        .user-input-box input{
            height:40px;
            width:95%;
            border-radius: 7px;
            outline:none;
            border:1px solid grey;
            padding:0 10px;
        }
        .sub-title{
            color:white;
            font-size:24px;
            font-weight:600px;
            border-bottom: 1px solid white;


        }
        .sub-cate{
            margin:15px 0;
            color:white;
            
        }
        .sub-cate label{
            padding:0 20px 0 5px;

        }
        .sub-cate label{
            padding:0 20px 0 5px;

        }
        .sub-cate label,
        .sub-cate input,
        .form-submit-btn input{
            cursor: pointer;

        }

        .form-submit-btn{
            margin-top: 40px;
        }

        .form-submit-btn input{
            display:block;
            width: 100%;
            margin-top: 10px;
            font-size: 20px;
            padding: 10px;
            border:none;
            border-radius: 3px;
            color:rgb(209,209,209);
            background: rgba(63,114,76,0.7);
        }

        .form-submit-btn input:hover{
            background: rgba(56,204,93,0.7);
            color:rgb(255,255,255);
        
        }
        @media(max-width:600px){
            .container{
                min-width: 280px;

            }
            .user-input-box{
                margin-bottom: 12px;
                width:100%;
            }
            .user-input-box:nth-child(2n){
                justify-content: space-between;
            }
            .sub-cate{
                display:flex;
                justify-content: space-around;
                width: 100%;
            }
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
                        <option value="CSE-AI">CSE-AI</option>
                        <option value="CSO">CSO</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="MECHANICAL">MECH</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                        <option value="CSE">CSE</option>
                        <option value="CSD">CSD</option>
                        <option value="CSM">CSM</option>


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
              
            <input type="submit" value="Submit">
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