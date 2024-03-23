<?php
// Assuming the same database connection details as before
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_application";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">[]
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family:'Helvetica', sans-serif;
            background-color: #e0e0e0; /* Set your desired background color */
        }

        .result-container {
            background-color: #f8f8f8;
            padding: 15px;
            margin: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .result-container p {
            font-family: "Arial", sans-serif; /* Set your desired font-family */
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $skill = $_POST["skill"];

    // SQL query to search for job seekers with the specified skill
    $sql = "SELECT * FROM form_data WHERE skill = '$skill'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the results
        while ($row = $result->fetch_assoc()) {
            echo '<div class="result-container">';
            echo "<p>Name: " . $row["fullName"] . "</p>";
            echo "<p>Phone Number: " . $row["phoneNumber"] . "</p>";
            echo "<p>Email: " . $row["email"] . "</p>";
            echo "<p>Address: " . $row["address"] . "</p    >";
            echo "<p>Expected salary" . $row["expected_salary"] . "</p    >";
            echo "<p>Years of Experience" . $row["years_of_experience"] . "</p    >";
            echo "<p>Objective: " . $row["objective"] . "</p>";
            // Add more details as needed
            echo "</div>";
        }
    } else {
        echo '<div class="result-container">';
        echo "No matching candidates found.";
        echo "</div>";
    }
}
echo '<h2>click here <a href="nav.html">Home</a></h2>';
?>

</body>
</html>

<?php
$conn->close();
?>
