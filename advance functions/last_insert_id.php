<?php
include '../../db_connect.php';

$conn->query("
INSERT INTO employees (first_name, last_name, department, salary, hire_date)
VALUES ('Test', 'User', 'IT', 50000, '2024-01-01')
");

$result = $conn->query("SELECT LAST_INSERT_ID() AS last_id");
$row = $result->fetch_assoc();

echo "<h2>LAST_INSERT_ID()</h2>";
echo "Last Inserted ID: " . $row['last_id'];
?>
