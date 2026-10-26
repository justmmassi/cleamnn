CREATE DATABASE IF NOT EXISTS bexxy_cleaning
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE bexxy_cleaning;

CREATE TABLE IF NOT EXISTS booking_requests (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    service VARCHAR(80) NOT NULL,
    rooms TINYINT UNSIGNED NOT NULL,
    preferred_date DATE NOT NULL,
    arrival_time TIME NOT NULL,
    extra_services TEXT NOT NULL,
    full_name VARCHAR(150) NOT NULL,
    email VARCHAR(254) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    service_address VARCHAR(500) NOT NULL,
    notes TEXT NOT NULL,
    status ENUM('pending', 'contacted', 'confirmed', 'cancelled') NOT NULL DEFAULT 'pending',
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    KEY idx_booking_requests_date (preferred_date),
    KEY idx_booking_requests_status_created (status, created_at)
) ENGINE=InnoDB
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;
