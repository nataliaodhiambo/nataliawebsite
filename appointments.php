<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book your appointment here</title>
    <style>
        /*css styling for the form*/
        form{
            max-width: 1000%;
            margin: 0px;
        }
        label{
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input,select{
            width: 100%;
            padding: 8px; 
            border: 1px solid #a26d6d;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }


        #uniqueId
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f5ec;
            color: #333;
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
            background-color: #a02020;;
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
   
    <h1>Appointment Form</h1>


    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>


        <label for="service">Service:</label>
        <select id = "service" name="service" required>
            <option value="">Select a service</option>
            <option value="facial">Facial</option>
            <option value="manicure">Manicure</option>
            <option value="braiding-children">Braiding (Children)


            </option>
            <option value="braiding-adult">Braiding(Adult)</option>
            <option value="haircut-child">Haircut(Child)</option>
            <option value="haircut-adult">Haircut(Adult)</option>
        </option>
        </select>


        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="email address">Email address:</label>
        <input type="email" id="email address" name="email address" required>


        <label for="time">Appointment Time:</label>
        <select id="time" name = "time" required>
            <option value="">Select a time</option>
            <option value="early-morning">Early Morning</option>
            <option value="mid-morning">Mid-Morning</option>
            <option value="afternoon">Afternoon</option>
       


        <input type="submit" value="Submit">
    </form>
    <?php include_once("templates/footer.php");?>
</body>
</html>
