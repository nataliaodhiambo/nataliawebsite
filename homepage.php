<!DOCTYPE html>
<html lang="en">
<div id = "uniqueId">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>natalia's salon</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f9f5ec;
            color: #333;
        }
        
        h1{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            font-size: 3em;
        }

        h2{
            text-align: center;
            margin-bottom: 1em;
            font-size: 1.5em;
        }

        p{
            font-size: 1em;
            line-height: 1.5;
        }

        .top-bar{
            text-align: center;
            padding: 10px;
        }

        .top-bar a{
            color: #333;
            text-decoration: none;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .top-bar a:hover{
            background-color: #a02020;
        }
        
        main{
            display: flex;
        }

        .content-wrapper{
            flex: 3;
            padding: 20px;
        }

        .sidebar{
            flex: 1;
            background-color: #f0f0f0;
            padding: 10px;
        }

        .sidebar a img{
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        main section{
            margin-bottom: 20px;
        }
    </style>
    </head>
    <body>
<?php include_once("templates/nav.php");?>

    <header>
    <h1>Welcome to Natalia's salon!</h1>
    </header>

    <main>
        <section class = "content-wrapper">
            <h2 class = "intro-heading">Your beauty oasis awaits</h2>
            <p>At our salon, we are dedicated to providing you with quality and painless services. <br>
                From haircuts and styling to manicures and pedicures, our talented team of stylists are here to help you look and feel your best!</p><br>
            <h2>Our Services</h2>
            <p>We offer a wide range of services to cater to your individual needs. <br>
                Whether you're looking for your new hairstyle, relaxing massage or a facial, we have you covered. <br>
                 Visit our services page to explore all the options available.</p> <br>
        </section>
        <section class="sidebar">
            <h2>Contact Us</h2>
            <p>Natalia's Salon<br>
                198 Malaba Road<br>
                Nairobi<br>
                +254 849 3928420<br>
        </section>
    </main>
</body>
</div>
<?php include_once("templates/footer.php");?>
</html>

