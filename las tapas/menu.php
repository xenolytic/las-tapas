<?php
include './includes/nav.php';
?>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/menu.css">
</head>
<body>
    
</body>
</html>

<div class="info">
    <div class="infocontent">
        <div class="unique-logo">
            <img src="./photos/las_tapaslogo-removebg-preview.png" alt="Logo">
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<section id="Meals">
<h2>Traditional Meals</h2>
</section>

<div class="menu">
    <div class="menu-item">
        <img src="photos/Carne-Guisada-Tacos-1200-3307.jpg" alt="Taco con carne desmigada" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Taco con carne desmigada</p>
            <p class="menu-price">$15.99</p>
            <button onclick="showOrderModal('Taco con carne desmigada', 15.99)" class="order-button">Order</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="photos/Shredded-Beef-Tacos-19.jpg" alt="Shredded beef tacos" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Shredded beef tacos</p>
            <p class="menu-price">$12.99</p>
            <button onclick="showOrderModal('Shredded beef tacos', 12.99)" class="order-button">Order</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="photos/Recept_Spareribs_1__1.jpeg" alt="Spareribs" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Spareribs</p>
            <p class="menu-price">$18.59</p>
            <button onclick="showOrderModal('Spareribs', 18.59)" class="order-button">Order</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="photos/ribfinger.jpg" alt="Ribfingers met chimichurri" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Ribfingers met chimichurri</p>
            <p class="menu-price">$14.29</p>
            <button onclick="showOrderModal('Ribfingers met chimichurri', 14.29)" class="order-button">Order</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="photos/steakandfries.jpg" alt="Steak met frietjes" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Steak met frietjes</p>
            <p class="menu-price">$14.29</p>
            <button onclick="showOrderModal('Steak met frietjes', 14.29)" class="order-button">Order</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="photos/1_sep_-_tajine_zondag1.jpg" alt="Tajine met kipgyros" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Tajine met kipgyros</p>
            <p class="menu-price">$13.59</p>
            <button onclick="showOrderModal('Tajine met kipgyros', 13.59)" class="order-button">Order</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="photos/friet.jpg" alt="Cubaans frietje met stoofvlees, chilimayonaise en gekonfijte pepertjes" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Cubaans frietje met stoofvlees, chilimayonaise en gekonfijte pepertjes</p>
            <p class="menu-price">$13.29</p>
            <button onclick="showOrderModal('Cubaans frietje met stoofvlees, chilimayonaise en gekonfijte pepertjes', 13.29)" class="order-button">Order</button>
        </div>
    </div>
</div>

<section id="drinks">
    <h2 >Drinks</h2>
</section>

<div class="menu">
    <div class="menu-item">
        <img src="photos/illustration-tequila-with-sunset-background_910684-2933.avif" alt="Tequila sunset" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Tequila sunset</p>
            <p class="menu-price">$6.99</p>
            <button onclick="showOrderModal('Tequila sunset', 6.99)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/pink-cocktail-with-palm-tree-palm-tree-background_1088278-145823.jpg" alt="Sex on the beach" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Sex on the beach</p>
            <p class="menu-price">$4.99</p>
            <button onclick="showOrderModal('Sex on the beach', 4.99)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/tropical-drink-with-straw-straw-it_1340-40495.avif" alt="Mango mai Thai" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Mango mai Thai</p>
            <p class="menu-price">$5.99</p>
            <button onclick="showOrderModal('Mango mai Thai', 5.99)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/bananan.jpg" alt="Banana bonanza" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Banana bonanza</p>
            <p class="menu-price">$3.59</p>
            <button onclick="showOrderModal('Banana bonanza', 3.59)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/Clover-Club-gin-cocktail-met-Andreas-Dry-Gin-gin-recept-Alles-over-gin.jpg" alt="clover club" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Clover club</p>
            <p class="menu-price">$6.29</p>
            <button onclick="showOrderModal('Clover club', 6.29)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/licor.jpg" alt="licor spritz" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Licor spritz</p>
            <p class="menu-price">$4.89</p>
            <button onclick="showOrderModal('Licor spritz', 4.89)" class="order-button">Order</button>
        </div>
    </div>
</div>

<section id="softdrinks">
    <h2 >Soft Drinks</h2>
</section>

<div class="menu">
    <div class="menu-item">
        <img src="photos/Red-Bull-Blikje-25cl-800x800.jpg" alt="Redbull" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Redbull</p>
            <p class="menu-price">$3.50</p>
            <button onclick="showOrderModal('Redbull', 3.50)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/cocacola.png" alt="Coca cola" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Coca cola</p>
            <p class="menu-price">$2.50</p>
            <button onclick="showOrderModal('Coca cola', 2.50)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/AHI_4354523130303534313930.jpg" alt="Pepsi" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Pepsi</p>
            <p class="menu-price">$2.50</p>
            <button onclick="showOrderModal('Pepsi', 2.50)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/sprite-soda-flavors-049000028928-64_1000.avif" alt="Sprite" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Sprite</p>
            <p class="menu-price">$2.50</p>
            <button onclick="showOrderModal('Sprite', 2.50)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/Lipton-ice-tea-peach-koolzuurvrij-pet-12x-50cl_png.jpg" alt="Ice Tea" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Ice Tea</p>
            <p class="menu-price">$2.50</p>
            <button onclick="showOrderModal('Ice Tea', 2.50)" class="order-button">Order</button>
        </div>
    </div>
    <div class="menu-item">
        <img src="photos/FANTA-Orange-ZERO-Frisdrank-0-33-l-blik-pak-24-stuks-320x320.jpg" alt="Fanta" class="menu-image">
        <div class="menu-details">
            <p class="menu-name">Fanta</p>
            <p class="menu-price">$2.50</p>
            <button onclick="showOrderModal('Fanta', 2.50)" class="order-button">Order</button>
        </div>
    </div>
</div>

<div id="orderModal">
    <div style="background:white; padding:20px; border-radius:5px; text-align:center;">
        <h3 id="modalTitle"></h3>
        <p>Price: $<span id="modalPrice"></span></p>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" value="1" min="1" style="width:50px; text-align:center;">
        <br><br>
        <button onclick="confirmOrder()">Confirm Order</button>
        <button onclick="closeOrderModal()">Cancel</button>
    </div>
</div> 

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Modal functions
        window.showOrderModal = function(item, price, quantity) {
            document.getElementById('modalTitle').textContent = item;
            document.getElementById('modalPrice').textContent = price.toFixed(2);
            document.getElementById('orderModal').style.display = 'flex'; // Show the modal
        }

        window.closeOrderModal = function() {
            document.getElementById('orderModal').style.display = 'none'; // Hide the modal
        }

        window.confirmOrder = function() {
            const item = document.getElementById('modalTitle').textContent;
            const price = parseFloat(document.getElementById('modalPrice').textContent);
            const quantity = document.getElementById('quantity').value;

            addToCart(item, price, quantity); // Send order to the server
            closeOrderModal(); // Hide the modal after confirmation
        }

        window.addToCart = function(item, price, quantity) {
            // Make an AJAX call to send the item to the PHP server
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "./order.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert(xhr.responseText); // Show the server response
                } else {
                    alert("Error: " + xhr.status); // Show error if AJAX fails
                }
            };
            xhr.send("item=" + encodeURIComponent(item) + "&price=" + price + "&quantity=" + quantity);
        }

        // Toggle Navbar Functionality
        const toggleButton = document.getElementById('navbar-toggle');
        const navLinks = document.querySelector('.navbar-links');

        if (toggleButton) {
            toggleButton.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        }

        // Cart Link Functionality
        const cartLink = document.querySelector('.navbar-cart a');

        if (cartLink) {
            cartLink.addEventListener('click', (event) => {
                event.preventDefault();
                fetch('./cart.php')
                    .then(response => response.text())
                    .then(data => {
                        // Display cart data in a modal or a designated area
                        const cartContainer = document.getElementById('cart-container');
                        cartContainer.innerHTML = data;
                    });
            });
        }
        const textPath = document.getElementById('textPath');
const text = textPath.textContent.trim();
textPath.innerHTML = ''; // Clear initial content
const textArray = text.split('').reverse(); // Reverse text array
let counter = 0;

const fillPath = () => {
    if (counter < textArray.length) {
        // Add next character in reverse order
        textPath.innerHTML = textArray[counter++] + textPath.innerHTML; 
        // Recursive call with delay
        setTimeout(fillPath, 50);
    }
};

// Initial delay before starting animation
setTimeout(fillPath, 500);

    });
    
</script>