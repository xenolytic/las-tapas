<?php
include './config/vars.php';

// Handle item deletion
if (isset($_POST['delete'])) {
    $item_id = intval($_POST['delete']);
    $delete_sql = "DELETE FROM orders WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $stmt->close();
}

// Handle payment and cart clearing
if (isset($_POST['proceed'])) {
    // Copy all items from the `orders` table to `completed_orders`
    $copy_sql = "INSERT INTO completed_orders (item_name, item_price, quantity, table_number)
                SELECT item_name, item_price, quantity, table_number FROM orders";
    $copy_result = $conn->query($copy_sql);

    if ($copy_result) {
        // If data copy is successful, clear the `orders` table
        $clear_cart_sql = "DELETE FROM orders";
        $conn->query($clear_cart_sql);
        echo "<script>alert('Payment successful! Cart is cleared and order history is updated.');</script>";
    } else {
        // Handle errors in copying data
        echo "<script>alert('Error: Could not update order history.');</script>";
    }
}

// Fetch cart items from the database
$sql = "SELECT id, item_name, item_price, quantity, table_number FROM orders"; // Include the quantity column
$result = $conn->query($sql);


?>
