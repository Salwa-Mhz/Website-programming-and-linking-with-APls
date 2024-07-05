 <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $direction = $data['direction'];

    // Connect to the database
    $conn = new mysqli('localhost', 'username', 'password', 'database');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Store the direction in the database
    $stmt = $conn->prepare("INSERT INTO robot_commands (direction) VALUES (?)");
    $stmt->bind_param("s", $direction);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo json_encode(["status" => "success", "direction" => $direction]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>
