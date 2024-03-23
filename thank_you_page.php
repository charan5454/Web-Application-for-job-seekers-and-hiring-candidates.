<!-- thank_you_page.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
     
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('tp.jpeg'); /* Add background image */
            background-size: cover; /* Ensure the background image covers the entire screen */
            background-position: center; /* Center the background image */
            font-family: Arial, sans-serif; /* Add a fallback font-family */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            background-image: url(climg.jpg);
        }

        h2 {
            font-size: 2em;
            transform: scale(0);  
            animation: scaleUp 1.5s forwards;   
            color: black; /* Set text color to white for better visibility */
        }

        @keyframes scaleUp {
            to {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>

<?php
if (isset($_GET["success"]) && $_GET["success"] == "true") {
    // Display the thank-you message    
   
    echo "<br><br><br><br><br><br><h2>We value your interest in being a part of our team and look forward <br> to the possibility of working together in the future.</h2>";
    echo "<h2>Best regards,</h2>";
    echo '<h2>To go to the Home page, click here <a href="nav.html">Home</a></h2>';

} else {    
    // Display a generic message or handle errors
    echo "<h2>Something went wrong. Please try again later.</h2>";
}
?>  

</body> 
</html>
