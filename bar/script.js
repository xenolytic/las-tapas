document.addEventListener('DOMContentLoaded', loadOrders);
console.log('JavaScript is loaded and running!');

function loadOrders() {
    const ordersDiv = document.getElementById('orders');
    ordersDiv.innerHTML = '<div class="loading-spinner">Loading...</div>';

    fetch('getOrders.php')
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(orders => {
            ordersDiv.innerHTML = ''; // Clear loading spinner
            orders.forEach(order => {
                ordersDiv.appendChild(createOrderCard(order));
            });
        })
        .catch(error => {
            console.error('Error fetching orders:', error);
            showError('Failed to load orders. Please try again later.');
        });
}

function createOrderCard(order) {
    const orderDiv = document.createElement('div');
    orderDiv.className = 'order';
    orderDiv.innerHTML = `
        <h2>Table #${order.table_number}</h2>
        <p>Order Time: ${order.order_time}</p>
        <p>Items: ${order.items}</p>
        <button class="remove-btn">✓</button>
    `;
    const removeBtn = orderDiv.querySelector('.remove-btn');
    removeBtn.addEventListener('click', () => removeOrder(order.id, removeBtn));
    return orderDiv;
}

function removeOrder(orderId, button) {
    fetch('removeOrders.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            'orderId': orderId // Send the orderId as POST data
        })
    })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                const orderDiv = button.closest('.order');
                orderDiv.style.transition = 'opacity 0.5s ease';
                orderDiv.style.opacity = '0';
                setTimeout(() => orderDiv.remove(), 500);
            } else {
                showError('Failed to delete the order. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error deleting order:', error);
            showError('An error occurred while deleting the order.');
        });
}


function showError(message) {
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.setAttribute('role', 'alert'); // Accessibility
    errorDiv.textContent = message;
    document.body.appendChild(errorDiv);

    setTimeout(() => {
        errorDiv.remove();
    }, 3000);
}

document.getElementById("sidebar-toggle").addEventListener("click", function() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("collapsed");
});

document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('oudeBestellingen-toggle');
    const dropdown = document.getElementById('oudeBestellingen-dropdown');

    toggle.addEventListener('click', (e) => {
        e.preventDefault();
        dropdown.classList.toggle('hidden');
    });
});
