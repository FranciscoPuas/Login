-- Creación de la base de datos
CREATE DATABASE IF NOT EXISTS login_system;

-- Selección de la base de datos
USE login_system;

-- Creación de la tabla de usuarios
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    reset_token VARCHAR(255),
    created_at DATETIME
);
