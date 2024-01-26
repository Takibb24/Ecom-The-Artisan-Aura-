<?php
@include 'dbcon.php';

if(isset($_POST['add_admin'])){
    $p_name = $_POST['p_name'];
    $p_email = $_POST['p_email'];
    $p_password = $_POST['p_password'];
 
    $insert_query = mysqli_query($connect, "INSERT INTO `adm`(name, email, password) VALUES('$p_name', '$p_email', '$p_password')") or die('query failed');

 };

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
<?php @include 'header.php';?>
<section>
<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>Admin Registration</h3>
   <input type="text" name="p_name" placeholder="enter name" class="box" required>
   <input type="email" name="p_email" placeholder="enter email" class="box" required>
   <input type="password" name="p_password" placeholder="enter password" class="box" required>
   <input type="submit" value="Register" name="add_admin" class="btn">
</form>

</section>
    
</body>
</html>