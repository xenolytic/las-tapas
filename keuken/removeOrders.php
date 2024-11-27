<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kitchen_display";
$oldOrdersDb = "old_orders_db";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['orderId'])) {
    $orderId = $_POST['orderId'];

    try {
        // Connect to the main database
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        // Fetch the order details
        $orderQuery = "SELECT * FROM orders WHERE id = ?";
        $stmt = $conn->prepare($orderQuery);
        $stmt->bind_param("i", $orderId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            echo json_encode(["success" => false, "message" => "Order not found."]);
            exit;
        }

        $order = $result->fetch_assoc();
        $deletedAt = date('Y-m-d H:i:s');

        // Connect to the old orders database
        $oldOrdersConn = new mysqli($servername, $username, $password, $oldOrdersDb);
        if ($oldOrdersConn->connect_error) {
            throw new Exception("Connection to old orders database failed: " . $oldOrdersConn->connect_error);
        }

        // Insert into old orders
        $insertOldOrderSql = "INSERT INTO old_orders (id, table_number, items, order_time, deleted_at) VALUES (?, ?, ?, ?, ?)";
        $insertStmt = $oldOrdersConn->prepare($insertOldOrderSql);
        $insertStmt->bind_param("iisss", $order['id'], $order['table_number'], $order['items'], $order['order_time'], $deletedAt);

        if (!$insertStmt->execute()) {
            throw new Exception("Error moving order to old orders database.");
        }

        // Delete the order
        $deleteSql = "DELETE FROM orders WHERE id = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param("i", $orderId);

        if (!$deleteStmt->execute()) {
            throw new Exception("Error removing order.");
        }

        echo json_encode(["success" => true, "message" => "Order removed successfully."]);

    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => $e->getMessage()]);
    } finally {
        $stmt->close();
        $conn->close();
        if (isset($oldOrdersConn)) {
            $oldOrdersConn->close();
        }
    }
} else {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Invalid request method or missing orderId."]);
}

