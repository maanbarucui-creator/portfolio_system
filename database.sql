CREATE DATABASE IF NOT EXISTS portfolio_system;
USE portfolio_system;

CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    technologies VARCHAR(255),
    project_link VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO admins (username, password)
SELECT 'admin', SHA2('12345', 256)
WHERE NOT EXISTS (
    SELECT 1 FROM admins WHERE username = 'admin'
);

INSERT INTO projects (title, description, technologies, project_link) VALUES
('PHP + MySQL Portfolio', 'A dynamic portfolio website with an administrator dashboard for managing projects and contact messages.', 'PHP, MySQL, HTML, CSS', ''),
('Project Management System', 'A CRUD-based project management module where an administrator can add, edit, and delete portfolio projects.', 'PHP, MySQL, CRUD', ''),
('Contact Message System', 'A contact form that validates visitor information and stores messages in MySQL for the administrator to review.', 'PHP, MySQL, Validation', '');
