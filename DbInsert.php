<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ip3";

$user = $_POST["username"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "";
}

$sql = "INSERT INTO new_user VALUES('$email','$user','$pwd')";

if (mysqli_query($conn, $sql)) {
    echo "<html>";
    echo "<body style='background-image: url(\"comp.jpg\"); background-size: cover;'>";
    echo "<CENTER><H1>Thank you for registering! Now you can <a href='home.html'>login</a>.</H1></CENTER>";
    echo "</body>";
    echo "</html>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
