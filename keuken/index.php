<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Display</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="../keuken/">Keuken</a></li>
            <li><a href="../bar/">Bar</a></li>
            <li><a href="../oudeBestellingen/">Oude Bestellingen</a></li>
            <li><a href="../Dashboard/">Dashboard</a></li>
        </ul>
    </div>

    <!-- Sidebar Toggle Button -->
    <button id="sidebar-toggle" class="sidebar-toggle-btn">☰</button>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header Section -->
        <header class="header-container">
            <h1 class="header-title">Kitchen Display</h1>
            <img src="../images/logo.png" alt="logo afbeelding" class="logo">
        </header>

        <!-- Orders Section -->
        <div id="orders" class="orders-grid">
            <!-- Orders will be loaded here dynamically via JavaScript -->
        </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js" defer></script>
    </body>
</html>
