<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomproject";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    
    $sql = "INSERT INTO conus (id,name, email, message) VALUES ('$id','$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
