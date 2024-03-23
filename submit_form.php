<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_application";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$skill = $_POST['skill'];
$yoe = $_POST['yoe']; 
$exp = $_POST['exp'];
$address = $_POST['address'];
$objective = $_POST['objective'];

// Insert data into the database
$sql = "INSERT INTO form_data (fullName, phoneNumber, email, skill, years_of_experience, expected_salary, address, objective)
        VALUES ('$fullName', '$phoneNumber', '$email', '$skill', '$yoe', '$exp', '$address', '$objective')";


if ($conn->query($sql) === TRUE) {
    header("Location: thank_you_page.php?success=true");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
