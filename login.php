<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  </head>
  <body>
    <div class="container mt-3">


        <div class="col col-6 border pe-4 border-dark">
            <div class="col text-center my-3">
              <h3>Log In</h3>
            </div>

            <form class="row g-3"  method="post">
                

                <div class="col-md-12 border mb-4 ms-2">
                  <label for="email" class="form-label">ENTER YOUR EMAIL *</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Eg.example@email.com" required>
                  <div class="error"> 
                      <?php
                        if(isset($error['email'])){
                          echo $error['email'];
                        }
                      ?>
                    </div>
                
                </div>

                <div class="col-md-12 border mb-4 ms-2">
                  <label for="password" class="form-label"> Password</label>
                  <input type="password" name="password" class="form-control" id="password" required >
                  <div class="error"> 
                      <?php
                        if(isset($error['password'])){
                          echo $error['password'];
                        }
                      ?>
                    </div>      
                </div>


                    <div class="d-grid gap-2 col-6 mx-auto mb-2">
                  <button type="submit" name="login" class="btn btn-success">Log in</button>
                </div>
                
                </div>

            </form>

        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>



<?php


//require_once('connection.php');

if(isset($_POST['login'])){
   // if(email_exists()){
    $password = $_POST['password'];
    $email = $_POST['email'];

    $connection= mysqli_connect("localhost","root","","edtech");


    $query = mysqli_query($connection , "Select Password from registration Where Email = '$email'");

    $query2 = mysqli_query($connection , "Select Email from registration Where Email = '$email'");


    if(mysqli_num_rows($query2)== 1){
        $row = mysqli_fetch_assoc($query);
        if($password == $row['Password']){

          header("Location: index.php");

        }else{

          echo "password is not correct";
        }

    
      }else{

        echo "Email is not correct";
      }

   // header("Location: index.php");
  //}

}
?>