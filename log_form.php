<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="container h-100">
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="img.webp" alt="img"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

        <form method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email address" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="pwd" id="form2Example2" class="form-control" placeholder="Password"/>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="reg_form.php">Register</a></p>
            </div>
        </form>

        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>

<?php

  include "config.php";
  session_start();
  if(isset($_REQUEST['login']))
  {
    $em = $_REQUEST['email'];
    $pwd = md5($_REQUEST['pwd']);
    $sql = "select * from data where email='$em' and pwd='$pwd'";
    $res = mysqli_query($con,$sql);
    $data = mysqli_num_rows($res);
    $data1 = mysqli_fetch_assoc($res);
    if($data > 0)
    {
      $_SESSION['nm'] = $data1['name'];
      $_SESSION['email'] = $data1['email'];
      $_SESSION['pwd'] = $data1['pwd'];
      header("location:welcome.php");
    }
    else
    {
    echo "<script>alert('username or password is wrong');</script>";

    }
  }


?>