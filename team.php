<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our salon team</title>
    <style>
       #uniqueId
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f5ec; /* warm beige for background */
            color: #333; /* dark text color */
        }
        .top-bar{
            text-align: center;
            padding: 10px;
        }
        .top-bar a{
            color: #333;
            text-decoration: none;
            padding: 10px;
            border: 1 px solid #ddd;
        }
        .top-bar a:hover{
            background-color: #a02020;
        }
        main section{
            margin-bottom: 20px;
        }
        h2{
            margin-bottom: 10px;
        }
    </style>
    </head>
    <body>
<?php include_once("templates/nav.php");?>
    <h1>Meet our Team</h1>
    <img src = "images/salon team 1.jpg" alt = "The talented salon team">

    <img src = "images/salon team 2.jpg" alt = "The talented salon team">
</body>
<?php include_once("templates/footer.php");?>
</html>