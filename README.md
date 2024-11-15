# Restaurant Management System

**A streamlined system to manage reservations, orders, inventory, and staff communication for restaurants.**

## Features

- **Reservation Management**: 
  - Create, view, and cancel reservations seamlessly.
- **Order Processing**: 
  - Place and manage orders through a QR-based system.
- **Inventory Tracking**: 
  - Monitor and update stock levels automatically.
- **Staff Communication**: 
  - Real-time messaging for efficient teamwork.
- **Payment Integration**: 
  - Simple and secure payment processing.

## Tech Stack

- **Backend**: PHP (OOP, MVC)
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL (with MySQLi)
- **Additional Tools**: AJAX for smooth interactions and QR code libraries for customer experience.

## Project Structure

/app
  /controllers   -> Handles logic (ReservationController, OrderController, etc.)
  /models        -> Manages database interactions (ReservationModel, UserModel, etc.)
  /views         -> Templates for UI
/config          -> Configuration files (e.g., database)
/helpers         -> Reusable utilities
/public          -> Entry point and static assets
/routes          -> Route definitions
/core            -> Core classes (Router, Database, etc.)
/tests           -> Unit tests

## Getting Started

### Prerequisites

- **Server**: PHP 8.0+
- **Database**: MySQL 8.0+
- **Web Browser**: Modern browser (Chrome, Edge, Firefox)
- **Tools**: Composer (optional for package management)

### Installation

1. Clone the repository:
   git clone https://github.com/your-repo-name/restaurant-management.git
   cd restaurant-management

2. Set up the database:
   - Import `schema.sql` from the `/config` directory into your MySQL instance.

3. Configure the project:
   - Edit `/config/config.php` to include your database credentials.

4. Run the project:
   - Using PHP's built-in server:
     php -S localhost:8000 -t public
   - Open `http://localhost:8000` in your browser.

## Contributing

Contributions are welcome! Submit a pull request or report issues via the [GitHub Issues page](https://github.com/your-repo-name/issues).

## License

This project is licensed under the MIT License. See `LICENSE` for details.

---

**Built with ❤️ to enhance restaurant operations.**