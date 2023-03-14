
<?php 
session_start();
ob_start();
require_once('../../db/dbhelper.php');
    $username = $password = '';
    if(!empty($_POST)){
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $username = str_replace('"', '\\"',$username);
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
            $password = str_replace('"', '\\"',$password);
        }
        $sql = "select * from user where username='".$username."' and password='".$password."'";
        $user = executeSingleResult($sql);
        if(isset($sql) && isset($user['role'])){
            $role = $user['role'];
            $_SESSION['role'] = $role;
            $id = $user['id'];
            if(isset($id)) $_SESSION['id'] = $id;
            if($role == 0){
                header('location: ../../frontend/');
            }else if($role == 1){
                header('location: ../index.php');
            }
        }
        
        
        else{
            $txt_error ="Username hoặc Password không tồn tại";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    
  <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h3 class="mb-5">Sign in</h3>
                <form action="" method="post"> 
                    <div class="form-outline mb-4">
                    <label class="form-label" for="username"></label>
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="username"/>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="password"/>
                    <label class="form-label" for="password"></label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                    <p style="color: red;">
<?php
    if(isset($txt_error)&&($txt_error != "")){
        echo $txt_error;
    }
?>
                    </p>
                </form>
                <hr class="my-4">

                <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>

            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>