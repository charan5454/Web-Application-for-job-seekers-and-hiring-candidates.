<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newcompdb";

// Check if id is set in POST data
if(isset($_POST["id"])) {
    // Get the id from POST data
    $id = $_POST["id"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement using a prepared statement to prevent SQL injection
    $sql = "INSERT INTO compdb (id) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id); // "s" indicates the data type of the parameter (string)

    // Execute the statement
    if ($stmt->execute()) {
        echo "<html>";
        echo "<body style='background-image: url(\"comp.jpg\"); background-size: cover;'>";
        echo "<CENTER><H1>ID stored successfully. <a href='home.html'></a>.</H1></CENTER>";
        echo "</body>";
        echo "</html>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the prepared statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If id is not set in POST data
    echo "ID is not set";
}
?>
