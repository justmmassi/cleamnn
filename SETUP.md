# Run Bexxy locally with XAMPP

This site uses PHP for booking submissions and MySQL/MariaDB to store booking requests.

## 1. Copy the site into XAMPP

1. Start **Apache** and **MySQL** in the XAMPP Control Panel.
2. Copy the complete project folder (including `image`, `config`, `database.sql`, and the PHP files) into `C:\xampp\htdocs\bexxy`.
3. Open `http://localhost/bexxy/` in your browser. Do not open the site using a `file:///` URL; PHP needs Apache.

## 2. Create the database

1. Open `http://localhost/phpmyadmin/`.
2. Choose **Import**, select the project's `database.sql`, then choose **Import** / **Go**.
3. Confirm that the `bexxy_cleaning` database and `booking_requests` table appear.

The included XAMPP defaults are `127.0.0.1`, database `bexxy_cleaning`, username `root`, and an empty password. If your local MySQL credentials differ, set the `BEXXY_DB_HOST`, `BEXXY_DB_NAME`, `BEXXY_DB_USER`, and `BEXXY_DB_PASSWORD` environment variables before starting Apache.

## 3. Submit a test request

1. Open the site from `http://localhost/bexxy/`.
2. Submit a booking request using a future date and valid contact information.
3. Check phpMyAdmin → `bexxy_cleaning` → `booking_requests` → **Browse**. New requests are saved with a `pending` status.

The form validates submissions on the server, uses a CSRF token and a prepared database query, and displays a success message only after the database saves the request. This local starter does not send confirmation emails or provide a private staff dashboard.

## Before putting it on the public internet

Do not use the default XAMPP root account or an empty database password on a public server. Create a restricted database user, configure credentials outside the web root, enable HTTPS, add spam protection and backups, and define how long personal booking details are retained. The booking table contains customers' names, email addresses, phone numbers, and service addresses; protect access to it.
