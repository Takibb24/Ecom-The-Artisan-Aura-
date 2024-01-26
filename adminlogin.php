<?php

@include 'dbcon.php';
$errors = array(); 
if (isset($_POST['add_product'])) {
    $email = mysqli_real_escape_string($connect, $_POST['p_email']);
    $password = mysqli_real_escape_string($connect, $_POST['p_password']);
  
  
    if (count($errors) == 0) {
        $query = "SELECT * FROM adm WHERE email='$email' AND password='$password'";
        $results = mysqli_query($connect, $query);
        if (mysqli_num_rows($results) == 1) {
          header('location: products.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php @include 'header2.php';?>
<section>
<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>Admin Login</h3>
   <input type="email" name="p_email" placeholder="enter name" class="box" required>
   <input type="password" name="p_password" placeholder="enter password" class="box" required>
   <input type="submit" value="Login" name="add_product" class="btn">
</form>

</section>
    
</body>
</html>