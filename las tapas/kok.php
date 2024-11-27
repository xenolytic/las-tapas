<?php
include './config/vars.php'; // Include database configuration

// Fetch completed orders from the `completed_orders` table
$sql = "SELECT item_name, item_price, quantity, order_date FROM completed_orders ORDER BY order_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link rel="stylesheet" href="./css/kok.css">
</head>
<body>
<header>
        <div class="navbar-logo">
            <img src="./photos/La Cubanita.png " alt="Logo" style="height: 100px;">
        </div>

</header>
    <div class="order-history">
        <h2>Order History</h2>
        
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $total = $row['item_price'] * $row['quantity'];
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row['item_name']) . '</td>';
                        echo '<td>$' . number_format($row['item_price'], 2) . '</td>';
                        echo '<td>' . intval($row['quantity']) . '</td>';
                        echo '<td>$' . number_format($total, 2) . '</td>';
                        echo '<td>' . date("F j, Y, g:i a", strtotime($row['order_date'])) . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">No completed orders found.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<?php $conn->close(); ?>
