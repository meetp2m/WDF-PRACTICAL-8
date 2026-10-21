
CREATE DATABASE studenthub;
USE studenthub;

CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(100) NOT NULL,
    event_date DATE NOT NULL
);

CREATE TABLE registrations (
    registration_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    event_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES students(student_id),
    FOREIGN KEY (event_id) REFERENCES events(event_id),
    UNIQUE (student_id, event_id)
);

INSERT INTO students (name, email) VALUES
('Rahul', 'rahul@gmail.com'),
('Priya', 'priya@gmail.com'),
('Amit', 'amit@gmail.com');

INSERT INTO events (event_name, event_date) VALUES
('Coding Competition', '2026-11-10'),
('Web Development', '2026-11-15');

INSERT INTO registrations (student_id, event_id) VALUES
(1, 1),
(2, 2),
(3, 1);
