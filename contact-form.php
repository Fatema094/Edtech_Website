<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign-Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  </head>
  <body>
    <div class="container mt-3">


     

        
        <div class="col col-6 border pe-4 border-dark">
            <div class="col text-center my-3">
              <h3>Sign Up</h3>
            </div>

            <form class="row g-3"  method="post">
                <div class="col-md-12 border mb-4 ms-2 mt-5">
                  <label for="FirstName" class="form-label">TELL US YOUR NAME *</label>
                  <div class="d-flex">
                    
                    <input type="text" name="f_name" class="form-control" id="FirstName" placeholder="First Name" required>
                    <div class="error"> 
                      <?php
                        if(isset($error['fname'])){
                          echo $error['fname'];
                        }
                      ?>
                    </div>
                    <input type="text" name="l_name" class="form-control" id="LastName" placeholder="Last Name" required>
                    <div class="error"> 
                      <?php
                        if(isset($error['lname'])){
                          echo $error['lname'];
                        }
                      ?>
                    </div>
                  </div>
                </div>

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
                  <label for="password" class="form-label">Create Password</label>
                  <input type="password" name="password" class="form-control" id="password" required >
                  <div class="error"> 
                      <?php
                        if(isset($error['password'])){
                          echo $error['password'];
                        }
                      ?>
                    </div>      
                </div>

                <div class="col-md-12 border mb-4 ms-2">
                  <label for="pho_num" class="form-label">ENTER PHONE NUMBER</label>
                  <input type="text" name="pho_num" class="form-control" id="pho_num" placeholder="Eg.+1800 000000" required>
                  <div class="error">
                  <?php
                        if(isset($error['PhoneNumber'])){
                          echo $error['PhoneNumber'];
                        }
                      ?>
                    </div>  
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto mb-2">
                  <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
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
    // error_reporting(E_ERROR | E_PARSE);
    if(isset($_POST['submit'])){
      $firstname = $_POST['f_name'];
      $secondname = $_POST['l_name'];
      $Email = $_POST['email'];
      $PhoneNumber = $_POST['pho_num'];
      $password = $_POST['password'];
      $error= array();

      if($firstname==null){
        $error['fname']="First Name is Blank";
      }

      if($secondname==null){
        $error['lname']="Last Name is Blank";
      }

      if($Email==null){
        $error['Email']="Email is  Blank";
      }
      if($password==null){
        $error['password']="Password is  Blank";
      }
      else if(strlen($password)<6){
        $error['password']="Password length must  be Six";
      }
      if($PhoneNumber==null){
        $error['PhoneNumber']="PhoneNumber Name is Blank";
      }

      if(count($error)==0){
        $connection= mysqli_connect("localhost","root","","edtech");
        $query=mysqli_query($connection,"Insert Into registration (Fname,Lname,Email,Password, PhoneNumber) Values('$firstname','$secondname','$Email','$password','$PhoneNumber') ");
        if($query){
          header("location:login.php");
        }
        
      }
      

      
    }
     ?>

