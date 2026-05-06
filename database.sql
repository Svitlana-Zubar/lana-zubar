-- Create database
CREATE DATABASE IF NOT EXISTS blog_database;
USE blog_database;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create blog_posts table
CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    content LONGTEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Create comments table (for extra feature)
CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL,
    author VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES blog_posts(id) ON DELETE CASCADE
);

-- Insert demo user (email: admin@example.com, password: password123)
INSERT INTO users (email, password) VALUES 
('admin@example.com', '$2y$10$YIjlrBxM0yPJuqVKVUWDMOu3dKqZVVRKVkK5.3vO7BQpV8KE0nCJe');

-- Insert sample blog posts
INSERT INTO blog_posts (user_id, title, content, created_at) VALUES 
(1, 'The wonderful world of web programming', 'I enjoy developing web applications using HTML, CSS, Javascript and PHP.', '2026-12-26 14:48:00'),
(1, 'Bootstrap Framework', 'I have recently started to utilise Bootstrap classes for developing my web applications.', '2026-12-27 14:49:00');
