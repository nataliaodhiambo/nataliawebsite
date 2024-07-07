<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback Form</title>
    <style>
        /* css styling for the form */
        body{
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400 px;
            margin: 0 auto;
        }
        label{
            display: block;
            margin-bottom: 10px;
        }
        input,select, textarea{
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        input [type="submit"]{
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
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
    <div class="top-bar">
        <a href="homepage.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="team.html">Our Stylists</a>
        <a href="gallery.html">Gallery</a>
        <a href="appointments.html">Book an Appointment</a>
        <a href="feedback.html">Feedback Form</a>
    </div>
    <h1>Customer Feedback Form</h1>

    <form>
        <label for="name">Name:</label>
        <input type="text"id="name" name="name" required>

        <label for="service">Service:</label>
        <select id="service" name="service" required>
            <option value=" ">Select a service</option>
            <option value="facial">Facial</option>
            <option value="manicure">Manicure</option>
            <option value="braiding-child">Braiding(child)</option>
            <option value="braiding-adult">Braiding(adult)</option>
            <option value="haircut-child">Haircut(child)</option>
            <option value="haircut-child">Haircut(adult)</option>
        </select>

        <label for="time">Time:</label>
        <select id="time" name="time" required>
            <option value="">Select a time</option>
            <option value="early-morning">Early Morning</option>
            <option value="mid-morning">Mid Morning</option>
            <option value="afternoon">Afternoon</option>
            </select>

        <label for="rating">Rating(1-10):</label>
        <input type="number" id="rating" name="rating" min="1" max="10" required>

        <label for="issues">Any issues:</label>
        <textarea id="issues" name="issues"></textarea>

        <label for="recommend">Would you recommend the services?
        </label>
        <select name="recommend"name="recommend" required>
            <option value="">Select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <label for="visit-again">Will you be visiting again?</label>
        <select id="visit-again" name="visit-again" required>
            <option value="">Select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>