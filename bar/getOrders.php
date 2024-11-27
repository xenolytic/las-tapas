<?php
header('Content-Type: application/json'); // Set header for JSON response

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bar_display";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, table_number, items, order_time FROM orders ORDER BY order_time ASC";
$result = $conn->query($sql);

$orders = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
}

echo json_encode($orders); // Output orders in JSON format
$conn->close();
?>
