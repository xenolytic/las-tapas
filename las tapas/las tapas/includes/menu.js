function addToCart(item, price, quantity) {
    // Make an AJAX call to send the item to the PHP server
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "order.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        if (xhr.status === 200) {
            alert(xhr.responseText); // Show server response
            updateCart(); // After adding, update the cart
        } else {
            alert("Error: " + xhr.status); // Show error if AJAX fails
        }
    };
    xhr.send("item=" + encodeURIComponent(item) + "&price=" + price + "&quantity=" + quantity);
}

function updateCart() {
    fetch('cart.php')
        .then(response => response.text())
        .then(data => {
            const cartContainer = document.getElementById('cart-container');
            cartContainer.innerHTML = data; // Update cart with new data
        });
}

// Modal functions
document.addEventListener('DOMContentLoaded', () => {
    window.showOrderModal = function(item, price) {
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
        const quantity = document.getElementById('quantity').value; // Get quantity value

        addToCart(item, price, quantity); // Send order to the server
        closeOrderModal(); // Hide the modal after confirmation
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
            fetch('cart.php')
                .then(response => response.text())
                .then(data => {
                    // Display cart data in a modal or a designated area
                    const cartContainer = document.getElementById('cart-container');
                    cartContainer.innerHTML = data;
                });
        });
    }
    const navbar = document.getElementById('navbar');

    window.onscroll = () => {
        if (window.scrollY > 0) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    };
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        const menuButton = document.querySelector(".menu-button");
        const navLinks = document.querySelector(".nav-links");
    
        menuButton.addEventListener("click", () => {
            navLinks.classList.toggle("show");
        });
    });
    
});
