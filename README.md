# Simple PHP + MySQL Portfolio Management System

This project follows the requirements in the PHP + MySQL Portfolio Management System activity.

## Features

- Public portfolio homepage
- Projects loaded dynamically from MySQL
- Admin login using PHP sessions
- Add, edit, and delete projects
- Contact form
- Contact messages stored in MySQL
- Admin message management
- Server-side validation
- Prepared statements
- Friendly error messages
- Logout

## Requirements

- XAMPP
- Apache
- MySQL
- phpMyAdmin
- VS Code or another code editor
- Web browser

## Installation

1. Copy the `portfolio_system` folder to:

   `C:\xampp\htdocs\portfolio_system`

2. Start Apache and MySQL in XAMPP.

3. Open phpMyAdmin.

4. Import `database.sql`.

5. Open:

   `http://localhost/portfolio_system/`

## Admin Login

Username:

`admin`

Password:

`12345`

## Main files

- `index.php` - public portfolio
- `style.css` - design
- `db.php` - database connection
- `login.php` - admin login
- `authenticate.php` - login processing
- `logout.php` - logout
- `send_message.php` - contact form processing
- `admin/dashboard.php` - project management
- `admin/add_project.php` - add project
- `admin/edit_project.php` - edit project
- `admin/delete_project.php` - delete project
- `admin/messages.php` - view contact messages
- `database.sql` - database setup

## Important

The classroom activity provides SHA-256 as its sample login setup. For a production website, replace this with `password_hash()` and `password_verify()`, as recommended in the activity.
