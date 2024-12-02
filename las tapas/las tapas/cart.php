<?php
include './controller/cart_controller.php';
include './includes/nav2.php';
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
    
    if ($conn->query($copy_sql) === TRUE) {
        // If data copy is successful, clear the `orders` table
        $clear_cart_sql = "DELETE FROM orders";
        if ($conn->query($clear_cart_sql) === TRUE) {
            echo "<script>alert('Payment successful! Cart is cleared and order history is updated.');</script>";
        } else {
            echo "<script>alert('Error clearing cart: " . $conn->error . "');</script>";
        }
    } else {
        // If there was an error copying data, show an error message
        echo "<script>alert('Error: Could not update order history. " . $conn->error . "');</script>";
    }
}

// Fetch cart items from the database
$sql = "SELECT id, item_name, item_price, quantity, table_number FROM orders"; // Include the quantity column
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>la cubanita</title>
    
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>
<body> 
<div class="hero">
    <div class="hero-content">
        <div class="shopping-cart">
            <h2>Your Cart</h2>
            <table style="background-color: #d3d3d3; border-radius:6px">
               <thead>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
        <th>Table Number</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    $total = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $subtotal = $row['item_price'] * $row['quantity'];
            $total += $subtotal;
            echo '<tr>';
            echo '<td class="product-info">';
            echo '<img src="./photos/foods.png" >'; // Placeholder image
            echo htmlspecialchars($row['item_name']);
            echo '</td>';
            echo '<td>$' . number_format($row['item_price'], 2) . '</td>';
            echo '<td>' . number_format($row['quantity'], 0) . '</td>';
            echo '<td>$' . number_format($subtotal, 2) . '</td>';
            echo '<td>' . htmlspecialchars($row['table_number']) . '</td>';
            echo '<td>';
            echo '<form action="" method="POST">';
            echo '<input type="hidden" name="delete" value="' . $row['id'] . '">';
            echo '<button type="submit" class="delete-btn">Delete</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="6" >Your cart is empty.</td></tr>';
    }
    ?>
</tbody>

            </table>

            <div class="cart-actions">
                <div class="cart-totals">
                    <h3 class="total">Total: $<?php echo number_format($total, 2); ?></h3>
                    <br>
                </div>
            </div>

            <form action="" method="POST">
                <input type="hidden" name="proceed" value="1">
                <button type="submit" class="proceed-btn">Proceed to Checkout</button>
            </form>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="words"><h2 style="color: #94191C; font-size:40px" class="h2">Dusseldorf London Amsterdam Rotterdam Roermond Antwerpen Duisburg Dubai</h2></div>
</div>
</body>
</html>

<?php $conn->close(); ?>
