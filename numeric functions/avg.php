<?php
include '../../db_connect.php';

$sql = "SELECT 
            AVG(salary) AS AverageSalary
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Average Salary Using AVG()</h2>";
    echo "<p>Average Salary: {$row['AverageSalary']}</p>";
} else {
    echo "No data found.";
}

$conn->close();
?>
