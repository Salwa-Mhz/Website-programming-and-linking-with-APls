<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch latest value
$sql = "SELECT value FROM data_table ORDER BY created_at DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the value
    while($row = $result->fetch_assoc()) {
        echo "<script>document.getElementById('data').innerText = 'Value: " . $row["value"] . "';</script>";
    }
} else {
    echo "<script>document.getElementById('data').innerText = 'No data available.';</script>";
}

$conn->close();
?>
