<?php
session_start();
$tot = isset($_SESSION['total']) ? $_SESSION['total'] : 0;
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    *{
        margin: 0;
        padding:0;
        font-family: poppins;
        box-sizing: border-box;
    }
    body{
        background: #1e1f21;
        color:#fff;
    }
    .wrapper{
        padding:10px 10%;
    }
    #card-area{
        padding: 0px 0;
    }
    .box-area{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Adjusted for responsiveness */
        grid-gap:40px;
        margin-top: 50px;
    }
    .box{
        border-radius: 10px;
        position:relative;
        overflow: hidden;
        box-shadow: 5px 5px 15px rgba(0,0,0,0.5);
    }
    .box img{
        width:100%;
        border-radius: 10px;
        display: block;
        transition:transform 0.5s;
    }
    .overlay{
        height:0;
        width: 100%;
        background: linear-gradient(transparent,#e9e144 58%);
        border-radius:10px;
        position: absolute;
        left:0;
        bottom:0;
        overflow:hidden;
        display:flex;
        align-items:center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align:center;
        font-size:14px;
        transition:height 0.5s;
    }
    .overlay h3{
        font-weight: 500;
        margin-bottom: 5px;
        margin-top: 80%;
        font-family: bebas neue;
        font-size:30px;
        letter-spacing: 2px;
    }
    .overlay a{
        margin-top: 10px;
        color:#262626;
        text-decoration: none;
        font-size: 14px;
        background: #fff;
        border-radius: 50px;
        text-align: center;
        padding: 5px 15px;
    }
    .boxLhover img{
        transform:scale(1.2);
    }
    .box:hover .overlay{
        height:100%;
    }
    body {
        background-image: url('adm.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    h2 {
        background: transparent;
        backdrop-filter: blur(15px);
        text-align: center;
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
  .button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  background-color: blueviolet;
  color: #fff;
  border: 2px solid #3498db;
  transition: background-color 0.3s, color 0.3s;
}

.button:hover {
  background-color: violet;
  color: #fff;
}

.button:focus {
  outline: none;
}


.container {
  margin: 50px auto;
  text-align: center;
} 
  

</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</head>
<body>

<div class="b">

<div class="jumbotron container-fluid bg-1 text-center ">


</div>

  <center>
    <h2>Enter the subjects with respect to the electives</h2>
  </center>

  <div class="wrapper">
    <div id="card-area" class="box-area"> <!-- Moved class "box-area" to the parent div -->
      <?php
      for ($i = 1; $i <= $tot; $i++) {
        echo '<div class="box">
                <img src="book.jpg" alt="">
                <div class="overlay">
                  <h3>Elective ' . $i . '</h3>
                  <a href="e' . $i . '.php">Click here</a>
                </div>
              </div>';
      }
      ?>
    </div>
  </div>


  <div class="container">
  <a href="admin.html" class="button">Back</a>
</div>
</body>
</html>
