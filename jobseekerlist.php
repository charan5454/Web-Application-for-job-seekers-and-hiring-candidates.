<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .box {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<nav>
    <a href="home.html">For Job Seekers</a>
    <a href="home1.html">For Companies</a>
    <a href="home3.html">For Creators</a>
    <a href="#">About Us</a>
</nav>

<!-- Box 1: To See the Job Seeker List Up to Now -->
<div class="box">
    <h2>To See the Job Seeker List Up to Now</h2>
    <?php
    // PHP code to retrieve job seeker list from the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job_application";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve job seeker list
    $sql = "SELECT * FROM form_data";
    $result = $conn->query($sql);

    // Display the job seeker list
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<strong>ID:</strong> " . $row["id"] . "<br>";
            echo "<strong>Full Name:</strong> " . $row["fullName"] . "<br>";
            echo "<strong>Phone Number:</strong> " . $row["phoneNumber"] . "<br>";
            echo "<strong>Email:</strong> " . $row["email"] . "<br>";
            echo "<strong>Skill:</strong> " . $row["skill"] . "<br>";
            echo "<strong>Address:</strong> " . $row["address"] . "<br>";
            echo "<strong>Objective:</strong> " . $row["objective"];
            echo "</li>"; 
        }
        echo "</ul>";
    } else {
        echo "No job seekers found.";
    }

    // Close connection
    $conn->close();
    ?>
</div>

</body>
</html>
