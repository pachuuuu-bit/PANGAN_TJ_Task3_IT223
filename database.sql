CREATE DATABASE abuton_db;
USE abuton_db;

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    department VARCHAR(50),
    salary DECIMAL(10,2),
    hire_date DATE
);

INSERT INTO employees (first_name, last_name, department, salary, hire_date) VALUES
('John', 'Doe', 'IT', 55000.00, '2020-03-12'),
('Jane', 'Smith', 'HR', 48000.00, '2019-06-22'),
('Carlos', 'Mendez', 'Finance', 62000.00, '2021-01-15'),
('Anna', 'Lopez', 'Marketing', 51000.00, '2020-09-30'),
('Peter', 'Brown', 'Sales', 47000.00, '2018-12-05'),
('Maria', 'Gonzales', 'IT', 58000.00, '2022-02-19'),
('David', 'Wilson', 'Finance', 63000.00, '2021-07-01'),
('Sophia', 'Anderson', 'Marketing', 49500.00, '2019-11-20'),
('Michael', 'Johnson', 'HR', 46000.00, '2020-04-11'),
('Olivia', 'Martinez', 'Sales', 52000.00, '2023-05-08'),
('James', 'Clark', 'IT', 60000.00, '2020-10-10'),
('Emily', 'Lewis', 'Finance', 61500.00, '2021-03-17'),
('Daniel', 'Walker', 'Marketing', 50500.00, '2022-06-02'),
('Isabella', 'Young', 'HR', 48000.00, '2018-08-09'),
('Henry', 'Hall', 'Sales', 49000.00, '2019-09-25'),
('Grace', 'Allen', 'Finance', 64000.00, '2023-02-13'),
('Lucas', 'Wright', 'IT', 59000.00, '2020-12-29'),
('Ella', 'King', 'Marketing', 53000.00, '2021-08-21'),
('Ethan', 'Scott', 'Sales', 51000.00, '2022-04-16'),
('Ava', 'Baker', 'HR', 47500.00, '2023-01-04');
