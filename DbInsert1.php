<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "jobportaldb";

$comp = $_POST["companyname"];
$user = $_POST["username"];
$pass = $_POST["pwd"];
$add = $_POST["address"];

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Escape user inputs to prevent SQL injection
$comp = mysqli_real_escape_string($conn, $comp);
$user = mysqli_real_escape_string($conn, $user);
$pass = mysqli_real_escape_string($conn, $pass);
$add = mysqli_real_escape_string($conn, $add);

$sql = "INSERT INTO jobsportal (companyname, username, password, address) VALUES ('$comp', '$user', '$pass', '$add')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<center><h1>Thank you for registering! Now you can <a href='home1.html'>login</a>.</h1></center>";
    exit;
} else {
    echo "Error creating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
