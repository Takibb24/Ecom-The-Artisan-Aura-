
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top:100px;
            padding: ;
            background-color: #f4f4f4;
            background-image: url(blurry.jpg);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center; 
        }

        form {
            max-width: 600px;
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .details {
            margin-left: 20px; 
            max-width: 300px; 
            padding: 20px;
            color: #fff;
            text-align: center;
            text-decoration: dashed;
            background-color: rgba(0, 0, 0, 0.5); 
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

    </style>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<?php @include '../header3.php';?>

    <form action="processForm.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">

        
    </form>
    </form>

    <div class="details">
        <h2>The ArtisanAura</h2>
        <p>
The Artisan Aura gallery encapsulates a fusion of contemporary and classical art, showcasing a diverse collection that celebrates
 both established and emerging artists. Nestled in the heart of the city, its serene ambiance invites patrons to explore captivating 
 pieces, each resonating with unique narratives and artistic expressions. With curated exhibitions that redefine perspectives and evoke
  emotions, The Artisan Aura stands as a haven for art enthusiasts seeking profound encounters with creativity.</p>

  <form action="viewcotact.php" method="get">
        <button type="Viewtable">View Table</button>
    </div>

</body>

</html>
