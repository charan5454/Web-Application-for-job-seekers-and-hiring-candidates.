<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "newcompdb";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve IDs of hired persons
$sql = "SELECT * FROM compdb";
$result = $conn->query($sql);   

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
