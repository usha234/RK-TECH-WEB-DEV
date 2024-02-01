<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>COMPANY REGISTRATION</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  </head>

    <style>
      /* body{
        background-image: url('reg.jpeg');
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
      }
      card{
        background-color: #555;
      } */

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
        .bg-1 { 
    background-color:  #212020; /* Green */
    color: #ffffff;
  }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: relative;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
  font-size: 15px;
} .bg-1 { 
    background-color:  #212020; /* Green */
    color: #ffffff;
  }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.73);
        border: solid rgba(0, 0, 0, 0.1);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, 0.1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      body{
        background-image: url('adm.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        bottom: 50px;
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


.con {
  margin: 50px auto;
  text-align: center;
} 
  
    </style>

    
    <!-- Custom styles for this template -->
    <link href="admin_home.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
 
    </header>
    <body>
  
  <nav class="navbar navbar-expand-lg sticky-top " style=" 
background: linear-gradient(to right, rgba(149, 14, 127, 0.179) 30%, rgba(242, 212, 20, 0.667) 65%, rgba(177, 30, 179, 0.5));
     background-size: 200% 200%;
     animation: gradient-animation 16s ease infinite;
    padding-bottom: 5%;
     width: 100%;
     padding-top: 3%;
     /* position: absolute; */

     border-radius: 0px 0px 25% 25%/40%;
">

 </nav>
  
    

  


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Subject</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="e33.php" method="post">
      <div class="modal-body">
       <!-- input -->
      <div class="input_fields_wrap">

<button class="add_field_button btn btn-outline-secondary">Add</button>
<br>
<br>
<input type="text" class="form-control mb-3" name="mytext[]" placeholder="Enter subject">
</div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Save</button>
        <button type="submit" name='su' class="btn btn-outline-primary">Submit</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- input script -->
<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="input-group mb-3"><input placeholder="Enter subject" type="text" name="mytext[]" class="form-control"><input type="text" value="' + x + '" name="co"  style="display:none"><div class="input-group-append"><button class="btn btn-outline-danger remove_field" type="button">Remove</button></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(y){ //user click on remove text
        y.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })
    });
</script>

<!-- edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editLabel">Updata Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="e3update.php" method="post">
      <div class="modal-body">
        <!-- <div class="from-group">
            <label for="">Id</label>
            <input type="text" name="id" id="i" class="form-control" placeholder='ID'>

        </div> -->
        <div class="form-group">
        <label for="">Enter subject</label>
            <input type="text" name="B" id="b" class="form-control" placeholder='subject'>
             <input type="text" name="C" id="c" class="form-control " style="display:none" placeholder='subject'>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
        <button type="submit" name='update' class="btn btn-outline-info">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- END OF EDIT MODEL -->


<!-- DELETE MODEL -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteLabel">Delete Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="e3delete.php" method="post">
      <div class="modal-body">
        <strong><h1>Do you want to delete...????</h1></strong>
        <div class="form-group">
        
        <input type="text" name="D" id="d" class="form-control" placeholder='subject'>
             
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
        <button type="submit" name='dele' class="btn btn-outline-danger">Delete</button>
      </div>
    
    </div>
  </div>
</div>
<!-- END OF DELETE  ,,,,,, -->



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- modal container -->
 <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card"
            
            >
              
                <?php
                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                    ?>
                     <div class="alert alert-info alert-dismissible   fade show" role="alert">
                      
                      <strong><?php echo $_SESSION['status']; ?></strong> 
                      <button formaction="e3.php" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>                 
                     
                    <?php
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card-header">
                    
                    <h1>Subject
                <button type="button" class="btn btn-outline-info float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Add 
                 </button>
            </h1>

                </div>
                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope='col'></th>
      <th scope='col'></th>
      <th scope="col">Subject</th>
      <th scope='col'></th>
      <th scope='col'></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $conn=mysqli_connect("localhost", "root", "", "form_system1");
    $sql="select * from elective3";
    $g=mysqli_query($conn, $sql);
    $s=1;
    if(mysqli_num_rows($g)>0){
       while($r=mysqli_fetch_array($g)){
        ?>
        <tr>
            <td class=' justify-content-center align-content-center'><?php echo $s++;?></td>
            <td>  </td>
            <td></td>
            <td class='st-i  justify-content-center align-content-center'><h5><?php echo $r['elective3'];?></h5></td>
            <td></td>
            <td >
              <div>
                <button class='ed btn btn-outline-info btn-lg' data-bs-toggle="modal" data-bs-target="#edit"> <ion-icon name="create-outline"></ion-icon></button>
                 <button class='btn btn-outline-danger del btn-lg' data-bs-toggle="modal" data-bs-target="#delete"><ion-icon name="trash-outline"></ion-icon></button> 
                 </div>
            </td>
        </tr>
        <?php
       } 
    }
    ?>
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="con">
  <a href="adminsub.php" class="button">Back</a>
</div>

</form>
<!-- end   ,,,,,,,,,,,,,,,,,, -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<!-- delete script -->
<script>
$(document).ready(function(){
   $('.del').click(function(e){
    e.preventDefault();
    
    var tr1 =$(this).closest('tr').find('.st-i').text();
    console.log(tr1);
   

    $('#d').val(tr1);
    
    

      });    
});
</script>

<!-- update script -->
<script>
$(document).ready(function(){
   $('.ed').click(function(e){
    e.preventDefault();
    // alert('hello')
    var tr =$(this).closest('tr').find('.st-i').text();
    console.log(tr);
    //$tr=$(this).closest('tr');
    //       var st_id=$tr.children('td').map(function(){
    //         return $(this).text();
    //       }).get();
    //  console.log(st_id[1]);


    $('#b').val(tr);
    $('#c').val(tr);
    //  $('#b').val(st_id[1]);
     






    //  $.ajax({
    //    type: "post",
    //     url: 'inser.php',
    //     data:  {
    //  'checking_ed': true,
    //         'student_id':st_id,
    //     },
    //    success :function(response) {
    //         console.log(response);
    //         // $.each(response,function(key,value) {
    //        //     // console.log(value['br']);
               

    //         // });
        
    //      }
    //   });
  

    });    
});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>
</html>