<?php
// Connect to the database
include './config/vars.php';

// Check if item, price, and quantity are set
if (isset($_POST['item']) && isset($_POST['price']) && isset($_POST['quantity'])) {
    // Sanitize and validate input
    $item = htmlspecialchars(trim($_POST['item']));
    $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);
    $quantity = filter_var($_POST['quantity'], FILTER_VALIDATE_INT);

    if ($price === false || $quantity === false) {
        echo "Invalid price or quantity!";
    } else {
        // Prepare the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO orders (item_name, item_price, quantity) VALUES (?, ?, ?)");

        if ($stmt === false) {
            echo "Error preparing statement!";
        } else {
            // Bind parameters and execute
            $stmt->bind_param("sdi", $item, $price, $quantity);
            if ($stmt->execute()) {
                echo "Order placed successfully!";
            } else {
                echo "Error placing the order.";
            }
            $stmt->close();
        }
    }
} else {
    echo "Item, price, and quantity are required.";
}

$conn->close();
