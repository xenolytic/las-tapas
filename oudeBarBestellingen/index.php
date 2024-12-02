<?php
// Database connection details
$servername = "localhost";  // Change if your MySQL server is hosted elsewhere
$username = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$dbname = "old_orders_bar_db";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch orders from the old_orders table
$sql = "SELECT id, table_number, items, order_time, deleted_at FROM old_orders";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Old Orders - Las Tapas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="../keuken/">Keuken</a></li>
            <li><a href="../bar/">Bar</a></li>
            <li>
                <a href="#" id="oudeBestellingen-toggle">Oude Bestellingen ▼</a>
                <ul id="oudeBestellingen-dropdown" class="dropdown hidden">
                    <li><a href="../oudeBestellingen/">Kitchen</a></li>
                    <li><a href="../oudeBarBestellingen/">Bar</a></li>
                </ul>
            </li>
            <li><a href="../Dashboard/">Dashboard</a></li>
        </ul>
    </div>
    <button id="sidebar-toggle" class="sidebar-toggle-btn">☰</button>
    
    <main>
        <section class="orders-section">
            <h2>Oude Bestellingen</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tafelnummer</th>
                        <th>Dranken</th>
                        <th>Voltooid</th>
                        <th>Besteld op</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Check if there are results
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            // Escape output to avoid XSS issues
                            echo "<td>" . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . "</td>";
                            echo "<td>" . htmlspecialchars($row['table_number'], ENT_QUOTES, 'UTF-8') . "</td>";
                            echo "<td>" . htmlspecialchars($row['items'] ?? 'Geen gerechten', ENT_QUOTES, 'UTF-8') . "</td>";
                            echo "<td>" . htmlspecialchars($row['order_time'], ENT_QUOTES, 'UTF-8') . "</td>";
                            echo "<td>" . htmlspecialchars($row['deleted_at'] ?? 'N/A', ENT_QUOTES, 'UTF-8') . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Geen oude bestellingen gevonden.</td></tr>"; // Corrected colspan to 5
                    }
                    // Close the connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <script>
        document.getElementById("sidebar-toggle").addEventListener("click", function() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("collapsed"); // Toggle collapsed class on sidebar
        });
        
        document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('oudeBestellingen-toggle');
    const dropdown = document.getElementById('oudeBestellingen-dropdown');

    toggle.addEventListener('click', (e) => {
        e.preventDefault();
        dropdown.classList.toggle('hidden');
    });
});

    </script>
</body>
</html>
