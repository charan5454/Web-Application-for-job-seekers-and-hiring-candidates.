<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "jobportaldb";

$conn = mysqli_connect($servername, $username, $password, $db);

if (mysqli_connect_errno()) {
    die("Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_POST["companyname"];
    $u = $_POST["username"];
    $p = password_hash($_POST["pwd"], PASSWORD_DEFAULT); // Hash the password for security
    $address = $_POST["address"];

    $sql = "INSERT INTO jobsportal (companyname, username, password, address) VALUES ('$company', '$u', '$p', '$address')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
        // Optionally, you can redirect the user to another page after successful registration
        header("location: validate2.php");
    } else { 
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
