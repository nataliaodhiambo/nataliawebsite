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
            max-width: 400px;
            margin: 20px auto;
            border: 1 px solid #ddd;
            border-radius: 4px;
            background-color: #fff;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }
        label{
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
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
    <div class="top-bar">
        <a href="homepage.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="team.html">Our Stylists</a>
        <a href="gallery.html">Gallery</a>
        <a href="appointments.html">Book an Appointment</a>
        <a href="feedback.html">Feedback Form</a>
    </div>
    
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

        <label for="time">Appointment Time:</label>
        <select id="time" name = "time" required>
            <option value="">Select a time</option>
            <option value="early-morning">Early Morning</option>
            <option value="mid-morning">Mid-Morning</option>
            <option value="afternoon">Afternoon</option>
        

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>