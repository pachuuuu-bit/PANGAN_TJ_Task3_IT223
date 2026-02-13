<?php
include '../../db_connect.php';

$sql = "SELECT SUM(salary) AS TotalSalary FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Total Salary of All Employees Using SUM()</h2>";
    echo "<p>Total Salary: {$row['TotalSalary']}</p>";
} else {
    echo "No data found.";
}

$conn->close();
?>
