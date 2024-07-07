<!DOCTYPE html>
<html lang="en">
<div id="uniqueId">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        p{
            line-height: 1.5;
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
       
        <main>
            <section class="hero">
                <h2>Welcome to Natalia's Salon</h2> <p>We are dedicated to providing exceptional salon services and creating a welcoming environment for our clients.</p>
            </section>


            <section>
                <h2>Our Story</h2>
                <p>Natalia's Salon opened its doors in 2019, driven by passion for making people feel beautiful and confident. Over the past 5 years, we have built a loyal clientele who appreciate our creativity and dedication to quality service.</p>
            </section>


            <section>
                <h2>What we Stand For</h2>
                <h3>Our Mission</h3>
                <p>
                    <i class="fas fa-star"></i> Empower our clients to look and feel their best.
                </p>


                <h3> Our Values</h3>
                <ul>
                    <li>Professionalism: We take pride in our expertise and deliver high-quality services.</li>
                    <li>Creativity: We embrace innovation and stay current with the latest trends.</li>
                    <li>Continuous Learning: We constantly strive to improve our skills and knowledge.</li>
                    <li>Passion: We are passionate about the beauty industry and helping you achieve your desired look.</li>
                </ul>
            </section>
            <section>
                <h2>What Our Clients Say</h2>
                <blockquote>"Natalia's Salon is my go-to place for a relaxing and pampering experience. The stylists are incredibly talented and always listen to what I want." - Sarah K.</blockquote>
                <blockquote>"I highly recommend Natalia's Salon! They transformed my hair and made me feel confident for my big event." - John M.</blockquote>
            </section>
        </main>
   
        <footer>
            <p>&copy; <span id="copyright-year"></span> Natalia's Salon. All rights reserved. <br>
                Nairobi Kenya.</p>
            <script>
                document.getElementById("copyright-year").innerHTML=new Date(). getFullYear();
            </script>
        </footer>
    </body>  
</div>
</html>