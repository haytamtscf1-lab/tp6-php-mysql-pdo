CREATE DATABASE IF NOT EXISTS tp_php CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE tp_php;

DROP TABLE IF EXISTS products;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL DEFAULT 0
);

INSERT INTO products (name, price, quantity) VALUES
('Clavier', 150.00, 20),
('Souris', 80.00, 35),
('Écran 24 pouces', 1200.00, 8),
('Casque audio', 350.00, 12),
('Clé USB 64 Go', 90.00, 50),
('Disque SSD 1 To', 750.00, 10);
