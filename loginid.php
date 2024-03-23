<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "idlogin";

$user = $_POST["username"];
$pwd = $_POST["pwd"];

$conn = mysqli_connect($servername, $username, $password, $db);

if (mysqli_connect_errno()) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    // Adjust the query based on your actual table column names
    $sql = "SELECT * FROM loginid WHERE loginid='$user' AND password='$pwd'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("location: home3.html"); // Redirect to home3.html for successful login
    } else {
        echo "Error in redirecting";
    }
}
?>
