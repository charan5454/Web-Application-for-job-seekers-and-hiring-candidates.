<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company List</title>
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

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
        }

        .box {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        li:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>



<div class="container">
    <!-- Box: To Display Companies Registered -->
    <div class="box">
        <h2>Companies Registered</h2>
        <?php
        // PHP code to retrieve companies list from the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "jobportaldb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to retrieve companies list
        $sql = "SELECT * FROM jobsportal";
        $result = $conn->query($sql);

        // Display the companies list
        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "<strong>CompanyName:</strong> " . $row["companyname"] . " | ";
                echo "<strong>UserName:</strong> " . $row["username"] . " | ";
                echo "<strong>Address:</strong> " . $row["address"];
                echo "</li>";
            }
            echo '<h1>Go To <a href="nav.html">Home</a></h1>';


            echo "</ul>";
        } else {        
            echo "No companies found.";
        }

        // Close connection
        $conn->close();
        ?>
    </div>
</div>

</body>
</html>
