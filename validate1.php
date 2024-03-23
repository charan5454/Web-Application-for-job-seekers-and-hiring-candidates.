<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "jobportaldb";

$u = $_POST["username"];
$p = $_POST["pwd"];

$conn = mysqli_connect($servername, $username, $password, $db);

if (mysqli_connect_errno()) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    $sql = "SELECT * FROM jobsportal WHERE username='$u' AND password='$p'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    }

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Valid login
        header("location: home1.html");
        exit();
    } else {
        // Invalid login
        header("location: login1.html");
        exit();
    }
}
?>
