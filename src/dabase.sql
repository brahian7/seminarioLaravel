CREATE DATABASE IF NOT EXISTS seminario_db;
USE seminario_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    contenido TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

INSERT INTO users (nombre, email) VALUES
('Carlos Pérez', 'carlos@mail.com'),
('María Gómez', 'maria@mail.com');

INSERT INTO posts (titulo, contenido, user_id) VALUES
('Mi primer post', 'Contenido del post 1', 1),
('Segundo post', 'Contenido del post 2', 1),
('Post de María', 'Hola mundo', 2);
