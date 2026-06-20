CREATE DATABASE seminario_db;
USE seminario_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(150) NOT NULL,
  contenido TEXT,
  user_id INT,
  categoria_id INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

INSERT INTO users (nombre, email) VALUES
('Juan', 'juan@mail.com'),
('María', 'maria@mail.com');

INSERT INTO categorias (nombre) VALUES
('Noticias'),
('Blog');

INSERT INTO posts (titulo, contenido, user_id, categoria_id) VALUES
('Mi primer post', 'Contenido del post 1', 1, 1),
('Segundo post', 'Contenido del post 2', 1, 1),
('Post de María', 'Hola mundo', 2, 2);

SELECT * FROM users;
SELECT * FROM categorias;
SELECT * FROM posts;
