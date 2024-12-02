<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Navbar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            position: sticky;
            top: 0;
            width: 100%;
            padding: 10px 20px;  /* Reduced padding for a thinner navbar */
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .navbar.sticky {
            background-color: #111;
        }

        .navbar .logo img {
            width: 70px;  /* Reduced logo width */
            height: auto;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin: 0 20px;  /* Reduced space between links */
            align-items: center;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;  /* Reduced font size for smaller navbar */
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #4CAF50;
        }

        .section {
            padding: 60px 20px;
            min-height: 100vh;
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Sticky Navbar -->
    <div class="navbar" id="navbar">
        <div class="logo">
            <img src="./photos/las tapas logo.png" alt="Logo" style="height: 80px;">
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <!-- Sections for demo -->
    <section id="home" class="section">
        <h2>Home</h2>
        <p>Welcome to our website!</p>
    </section>

    <section id="about" class="section">
        <h2>About Us</h2>
        <p>Learn more about what we do.</p>
    </section>

    <section id="services" class="section">
        <h2>Services</h2>
        <p>Check out the services we offer.</p>
    </section>

    <section id="contact" class="section">
        <h2>Contact</h2>
        <p>Get in touch with us.</p>
    </section>

    <script>
        // Sticky Navbar Effect
        const navbar = document.getElementById('navbar');

        window.onscroll = () => {
            if (window.scrollY > 0) {
                navbar.classList.add('sticky');
            } else {
                navbar.classList.remove('sticky');
            }
        };
    </script>

</body>
</html>
