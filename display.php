<?php
// Database connection
$conn = new mysqli('localhost', 'username', 'password', 'database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT filename, filepath FROM uploads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<img src='" . $row['filepath'] . "' alt='" . $row['filename'] . "' style='width:200px; height:auto;'><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>