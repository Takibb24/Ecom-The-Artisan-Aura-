<?php
session_start();

@include 'dbcon.php';
$errors = array(); 
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Valid email is required");
    }
    if (empty($password)) {
        array_push($errors, "Write valid password");
    }
  
    if (count($errors) == 0) {
        $query = "SELECT * FROM usreg WHERE email='$email' AND password='$password'";
        $results = mysqli_query($connect, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location: userproducts.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>