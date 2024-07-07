<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        /* CSS styling for the webpage */
        body{
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        .gallery{
            display:grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }
        .gallery img{
            width: 100%;
            height: auto;
        }

    /*for arranging photos in rows and columns with the same size*/
        .color-bar{
            background-color: #f44336;
            display: flex;
            justify-content: space around;
            align-items: center;
            padding: 10px;
        }
        .photo { /*for the sizing of the pictures */
            width: 200px; 
            height: 200px; 
            object-fit: cover; 
        }
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
    <h1>Gallery</h1>

    <div class = "gallery">
        <img src="images/braids m2.jpg" alt="service 1" style="display: inline-block;">
        <img src="images/facials 2.jpg" alt="service 2" style="display:inline-block;">
        <img src="images/mani 1.jpg" alt="service 3" style="display:inline-block;">
    </div>
    <?php include_once("templates/footer.php");?>
</body>
</html>