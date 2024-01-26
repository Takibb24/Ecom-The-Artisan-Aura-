<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomproject";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM conus";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submissions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url(blurry.jpg);
            background-size: cover;

        }

        table {
            position: absolute;
            z-index: 2;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
            border-radius: 12px 12px 0 0;
            overflow: hidden;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: black;
            color: #fafafa;
            font-family: 'Open Sans', Sans-serif;
            font-weight: 200;
            text-transform: uppercase;

        }

        tr {
            width: 100%;
            background-color: #fafafa;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<?php @include '../header3.php';?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>

        <?php
         
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No submissions yet</td></tr>";
        }
        $conn->close();
        ?>
    </table>

</body>

</html>